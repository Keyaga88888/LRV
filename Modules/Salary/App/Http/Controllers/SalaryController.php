<?php

// index.blade.php
//     ↓
// AJAX:
// route('salary.data')
//     ↓
// web.php

// GET /salary/data
//     ↓
// SalaryController::data()
//     ↓
// SalaryMechanism::query()
//     ↓
// with([
//     'user.part',
//     'user.position'
// ])
//     ↓
// SalaryMechanism Model
//     ↓ belongsTo
// User Model
//     ↓ belongsTo
// Part Model

// User Model
//     ↓ belongsTo
// Position Model
//     ↓
// DataTables
//     ↓
// JSON
//     ↓
// DataTable JS
//     ↓
// Render Table
// Position

namespace Modules\Salary\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Salary\App\Exports\SalaryExport;
use Modules\Salary\App\Http\Requests\StoreSalaryRequest;
use Modules\Salary\App\Http\Requests\UpdateSalaryRequest;
use Modules\Salary\App\Models\SalaryMechanism;
use Modules\Salary\App\Services\SalaryService;
use Modules\User\App\Models\User;
use Yajra\DataTables\Facades\DataTables;

/**
 * CONTROLLER: SalaryController
 * -----------------------------------------
 * 📌 Đây là ENTRY POINT từ:
 *
 * Blade (index.blade.php)
 *   ↓ AJAX / Route
 * Controller
 *   ↓
 * Service / Model / Repository
 *
 * 👉 Vai trò:
 * - trả view
 * - xử lý AJAX DataTable
 * - CRUD salary
 * - export Excel
 */
class SalaryController extends Controller
{
    /**
     * GET: /salary
     * -----------------------------------------
     * 📌 Trả giao diện chính (Blade)
     */
    public function index()
    {
        // return 'SALARY OK';

        // dd(
        //     Auth::check(),
        //     Auth::id(),
        //     Auth::user()
        //     // Auth::user()?->name
        // );
        // lấy toàn bộ user để hiển thị dropdown trong modal create
        // $users = User::all(); // all() nếu ko có : 100 nhân viên > 100 query user > 100 query part > 100 query position = 301 query
        $users = User::with(['part', 'position'])
            ->orderBy('name')
            ->get();

        // trả view + data users
/** @var view-string $view */
$view = 'salary::index';

return view($view, compact('users'));    }

    /**
     * GET: /salary/data
     * -----------------------------------------
     * 📌 API cho DataTables server-side
     *
     * Blade DataTable gọi AJAX vào đây
     */
    public function data() // DataTable bên Blade gọi:  ajax:'{{ route("salary.data") }}' > Route::get('/data', [SalaryController::class, 'data']) > nhảy vào đây : public function data()
    {
        $query = SalaryMechanism::query() // QUERY GỐC   query() = SELECT * FROM salary_mechanisms
            ->with(['user.part', 'user.position']); // QUERY GỐC  with()=Eager Loading tránh N+1 Query  |  nếu có ->with(['user.part', 'user.position']); > Laravel chỉ chạy khoảng: salary_mechanisms , users , parts , positions = 4 query

        // SalaryMechanism > tìm : public function user() {return $this->belongsTo(User::class,'user_id');}   trong  SalaryMechanism.php   Sau đó   user.part   Laravel tiếp tục > qua   User.php   tìm    public function part(){return $this->belongsTo(Part::class,'part_id');}
        // SQL tương đương: salary_mechanisms.user_id > users.id > users.part_id > parts.id
        // Laravel tiếp tục : public function position(){return $this->belongsTo(Position::class,'position_id');}
        // SQL : salary_mechanisms.user_id > users.id > users.position_id > positions.id
        return DataTables::eloquent($query)
            // DataTables::eloquent()  Yajra DataTables nhận Query > chưa query DB ngay > đợi DataTable gửi page , search , sort , limit > sau đó mới query
            // =========================
            // FILTER: employee_name
            // =========================
            ->filterColumn('employee_name', function ($query, $keyword) { // FILTER employee_name > Khi user search > Nguyen > ở cột: Nhân viên > DataTables gọi : filterColumn()
                $query->whereHas('user', function ($q) use ($keyword) { // < ròi Laravel chạy | Laravel nhìn: SalaryMechanism > relation: user() > JOIN ngầm: users
                    $q->where('name', 'like', "%{$keyword}%"); // v rồi search > $q->where('name','like','%Nguyen%');  =  WHERE EXISTS (SELECT * FROM users WHERE users.id = salary_mechanisms.user_id AND users.name LIKE '%Nguyen%')
                });
            })

            // =========================
            // FILTER: department
            // =========================
            ->filterColumn('department', function ($query, $keyword) {
                $query->whereHas('user.part', function ($q) use ($keyword) { // whereHas('user.part') Laravel đi: SalaryMechanism > User > Part
                    $q->where('name', 'like', "%{$keyword}%"); // v > parts.name LIKE '%IT%'
                });
            })

            // =========================
            // FILTER: position
            // =========================
            ->filterColumn('position', function ($query, $keyword) {
                $query->whereHas('user.position', function ($q) use ($keyword) { // whereHas('user.position') Laravel đi: SalaryMechanism > User > Position
                    $q->where('name', 'like', "%{$keyword}%"); // v > parts . name
                });
            })

            // =========================
            // FILTER: performance
            // =========================
            ->filterColumn('performance', function ($query, $keyword) { // ->filterColumn('performance')
                $keyword = strtolower($keyword);

                if (str_contains($keyword, 'tốt')) { // Nếu user nhập > Tốt > Laravel chuyển: performance_score >= 80
                    $query->where('performance_score', '>=', 80);
                } elseif (str_contains($keyword, 'khá')) { // Nếu nhập > Khá > 50 -> 79
                    $query->whereBetween('performance_score', [50, 79]);
                } elseif (str_contains($keyword, 'yếu')) { // Nếu nhập > Yếu > < 50
                    $query->where('performance_score', '<', 50);
                }
            })

            // =========================
            // FILTER: total_salary (FIX an toàn SQL)
            // =========================
            ->filterColumn('total_salary', function ($query, $keyword) { // ->filterColumn('total_salary')
                // > Cột này KHÔNG có trong DB > nên phải > whereRaw() > SQL: (basic_salary + allowance + bonus + overtime_salary - insurance_deduction - tax_deduction - late_penalty )
                $query->whereRaw('(
                COALESCE(basic_salary,0) +
                COALESCE(allowance,0) +
                COALESCE(bonus,0) +
                COALESCE(overtime_salary,0) -
                COALESCE(insurance_deduction,0) -
                COALESCE(tax_deduction,0) -
                COALESCE(late_penalty,0)
            ) like ?', ["%{$keyword}%"]);
            })
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("
        DATE_FORMAT(salary_mechanisms.created_at, '%Y-%m-%d %H:%i:%s')
        LIKE ?
    ", ["%{$keyword}%"]);
            })

            // =========================
            // COLUMN: employee_name
            // =========================
            ->addColumn('employee_name', fn ($r) => $r->user->name ?? '')
            // luồng: SalaryMechanism Row > user() > User Model > name
            // ví dụ: $row->user->name = Nguyễn Văn A > DataTable nhận: ("employee_name":"Nguyễn Văn A")
            // =========================
            // COLUMN: department
            // =========================
            ->addColumn('department', fn ($r) => $r->user->part->name ?? '')
            // luồng: SalaryMechanism > User > Part > name
            // ví dụ: $r->user->part->name
            // =========================
            // COLUMN: position
            // =========================
            ->addColumn('position', fn ($r) => $r->user->position->name ?? '')
            // luồng: SalaryMechanism > User > Position > name
            // ví dụ: $r->user->position->name
            ->addColumn(
                'created_at',
                fn ($r) => Carbon::parse($r->created_at)->format('Y-m-d H:i:s')
            )
            // =========================
            // COLUMN: total_salary
            // =========================
            ->addColumn('total_salary', function ($r) {
                //  ->addColumn('total_salary', > KHÔNG lấy DB > tính realtime: basic + allowance + bonus + overtime - insurance - tax - late
                // vị dụ: 10tr+1tr+2tr+1tr-500k-500k-0 =  13tr

                return
                    ($r->basic_salary ?? 0) +
                    ($r->allowance ?? 0) +
                    ($r->bonus ?? 0) +
                    ($r->overtime_salary ?? 0) -
                    ($r->insurance_deduction ?? 0) -
                    ($r->tax_deduction ?? 0) -
                    ($r->late_penalty ?? 0);
            })

            // =========================
            // COLUMN: performance label
            // =========================
            ->addColumn('performance', function ($r) { // ->addColumn('performance') > mapping: >=80 > Tốt | 50-79 > Khá | <50 > Yếu
                if ($r->performance_score >= 80) {
                    return 'Tốt';
                }
                if ($r->performance_score >= 50) {
                    return 'Khá';
                }

                return 'Yếu';
            })

            // =========================
            // COLUMN: action (GIỮ JS CỦA BẠN)
            // =========================
            ->addColumn('action', function ($r) {
                // ->addColumn('action') > Server tạo HTML > <button class="editBtn"> | <button class="deleteBtn">
                // gửi về JSON > Blade nhận: columns:[{data:'action'}] > render thành nút: ✏️ Sửa 🗑 Xoá
                return '
        <button class="btn btn-sm btn-primary editBtn"
            data-id="'.$r->id.'"
            data-basic_salary="'.$r->basic_salary.'"
            data-allowance="'.$r->allowance.'"
            data-bonus="'.$r->bonus.'"
            data-overtime_salary="'.$r->overtime_salary.'"
            data-insurance_deduction="'.$r->insurance_deduction.'"
            data-tax_deduction="'.$r->tax_deduction.'"
            data-late_penalty="'.$r->late_penalty.'"
            data-performance_score="'.$r->performance_score.'"
        >
            <i class="fas fa-pen"></i>
        </button>

        <button class="btn btn-sm btn-danger deleteBtn"
            data-id="'.$r->id.'"
        >
            <i class="fas fa-trash"></i>
        </button>
    ';
            })

            ->rawColumns(['action']) // < Nếu bỏ dòng này DataTable sẽ escape HTML sẽ hiện <button> thành text không thành button
            ->make(true); // > Yajra DataTables convert toàn bộ thành: {"draw":1,"recordsTotal":100,"recordsFiltered":50,"data":[...]} > gửi về: $('#salaryTable').DataTable(...) > rồi DataTable render ra màn hình.
    }
    // index.blade.php
    //     ↓
    // AJAX GET /salary/data
    //     ↓
    // web.php
    //     ↓
    // SalaryController::data()
    //     ↓
    // SalaryMechanism Query
    //     ↓
    // with(user.part,user.position)
    //     ↓
    // SalaryMechanism Model
    //     ↓
    // User Model
    //     ↓
    // Part Model
    //     ↓
    // Position Model
    //     ↓
    // DataTables::eloquent()
    //     ↓
    // filterColumn()
    //     ↓
    // addColumn()
    //     ↓
    // make(true)
    //     ↓
    // JSON
    //     ↓
    // DataTable JS
    //     ↓
    // HTML Table

    // public function data()
    // {
    //     // QUERY gốc + eager load relation
    //     $query = SalaryMechanism::query()
    //         ->with(['user.part', 'user.position']);

    //     return DataTables::eloquent($query)

    //         /*
    //         |--------------------------------------------------------------------------
    //         | FILTER COLUMN: employee_name
    //         |--------------------------------------------------------------------------
    //         | 📌 khi search cột employee_name
    //         | → thực chất search trong bảng users.name
    //         */
    //         ->filterColumn('employee_name', function ($query, $keyword) {
    //             $query->whereHas('user', function ($q) use ($keyword) {
    //                 $q->where('name', 'like', "%{$keyword}%");
    //             });
    //         })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | FILTER COLUMN: department
    //         |--------------------------------------------------------------------------
    //         */
    //         ->filterColumn('department', function ($query, $keyword) {
    //             $query->whereHas('user.part', function ($q) use ($keyword) {
    //                 $q->where('name', 'like', "%{$keyword}%");
    //             });
    //         })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | FILTER COLUMN: position
    //         |--------------------------------------------------------------------------
    //         */
    //         ->filterColumn('position', function ($query, $keyword) {
    //             $query->whereHas('user.position', function ($q) use ($keyword) {
    //                 $q->where('name', 'like', "%{$keyword}%");
    //             });
    //         })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | FILTER COLUMN: performance (logic tự viết)
    //         |--------------------------------------------------------------------------
    //         | 📌 user nhập: tốt / khá / yếu
    //         | → convert sang điều kiện score
    //         */
    //         ->filterColumn('performance', function ($query, $keyword) {

    //             $keyword = strtolower($keyword);

    //             if (str_contains($keyword, 'tốt')) {
    //                 $query->where('performance_score', '>=', 80);
    //             } elseif (str_contains($keyword, 'khá')) {
    //                 $query->whereBetween('performance_score', [50, 79]);
    //             } elseif (str_contains($keyword, 'yếu')) {
    //                 $query->where('performance_score', '<', 50);
    //             }
    //         })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | FILTER COLUMN: total_salary
    //         |--------------------------------------------------------------------------
    //         | 📌 search theo công thức tính lương
    //         */
    //         ->filterColumn('total_salary', function ($query, $keyword) {

    //             $query->whereRaw('(
    //                 basic_salary +
    //                 allowance +
    //                 bonus +
    //                 overtime_salary -
    //                 insurance_deduction -
    //                 tax_deduction -
    //                 late_penalty
    //             ) LIKE ?', ["%{$keyword}%"]);
    //         })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | ADD COLUMN: employee_name
    //         |--------------------------------------------------------------------------
    //         | 📌 map từ relationship user.name
    //         */
    //         ->addColumn('employee_name', function ($row) {
    //             return $row->user->name ?? '';
    //         })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | ADD COLUMN: department
    //         |--------------------------------------------------------------------------
    //         */
    //         ->addColumn('department', function ($row) {
    //             return $row->user->part->name ?? '';
    //         })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | ADD COLUMN: position
    //         |--------------------------------------------------------------------------
    //         */
    //         ->addColumn('position', function ($row) {
    //             return $row->user->position->name ?? '';
    //         })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | ADD COLUMN: total_salary (logic tính realtime)
    //         |--------------------------------------------------------------------------
    //         */
    //         ->addColumn('total_salary', function ($row) {
    //         return $row->total_salary;

    //         // return ($row->basic_salary ?? 0) +
    //         //     ($row->allowance ?? 0) +
    //         //     ($row->bonus ?? 0) +
    //         //     ($row->overtime_salary ?? 0) -
    //         //     ($row->insurance_deduction ?? 0) -
    //         //     ($row->tax_deduction ?? 0) -
    //         //     ($row->late_penalty ?? 0);
    //     })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | ADD COLUMN: performance label
    //         |--------------------------------------------------------------------------
    //         */
    //         ->addColumn('performance', function ($row) {

    //             if ($row->performance_score >= 80) return 'Tốt';
    //             if ($row->performance_score >= 50) return 'Khá';

    //             return 'Yếu';
    //         })

    //         /*
    //         |--------------------------------------------------------------------------
    //         | ACTION BUTTON HTML
    //         |--------------------------------------------------------------------------
    //         | 📌 gửi HTML sang Blade (edit/delete)
    //         */
    //         ->addColumn('action', function ($row) {

    //             return '
    //             <button class="btn btn-primary btn-sm editBtn"
    //                 data-id="' . $row->id . '"
    //                 data-user_id="' . $row->user_id . '"
    //                 data-basic_salary="' . $row->basic_salary . '"
    //                 data-allowance="' . $row->allowance . '"
    //                 data-bonus="' . $row->bonus . '"
    //                 data-overtime_salary="' . $row->overtime_salary . '"
    //                 data-insurance_deduction="' . $row->insurance_deduction . '"
    //                 data-tax_deduction="' . $row->tax_deduction . '"
    //                 data-late_penalty="' . $row->late_penalty . '"
    //                 data-performance_score="' . $row->performance_score . '"
    //             >
    //                 <i class="fas fa-edit"></i>
    //             </button>

    //             <button class="btn btn-danger btn-sm deleteBtn"
    //                 data-id="' . $row->id . '"
    //             >
    //                 <i class="fas fa-trash"></i>
    //             </button>
    //             ';
    //         })

    //         ->rawColumns(['action']) // cho phép render HTML

    //         ->make(true);
    // }

    /**
     * POST: /salary/store
     * -----------------------------------------
     * 📌 tạo salary mới
     */
    public function store(StoreSalaryRequest $request)
    {
        try {
            $data = $request->validated();

            $salary = app(SalaryService::class)->store($data);

            return response()->json([
                'success' => true,
                'data' => $salary,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    // public function store(Request $request)
    // {
    //     SalaryMechanism::create([
    //         'user_id' => $request->user_id,
    //         'basic_salary' => $request->basic_salary ?? 0,
    //         'allowance' => $request->allowance ?? 0,
    //         'bonus' => $request->bonus ?? 0,
    //         'overtime_salary' => $request->overtime_salary ?? 0,
    //         'performance_score' => $request->performance_score ?? 0,
    //     ]);

    //     return response()->json(['success' => true]);
    // }

    /**
     * POST: /salary/update/{id}
     * -----------------------------------------
     * 📌 update salary
     */
    public function update(
        UpdateSalaryRequest $request,
        $id,
        SalaryService $service
    ) {
        // dd($request->validated());
        $service->update(
            $id,
            $request->validated()
        );

        return response()->json([
            'success' => true,
        ]);
    }
    // public function update(Request $request, $id)
    // {
    //     $salary = SalaryMechanism::findOrFail($id);

    //     $salary->update([
    //         'basic_salary' => $request->basic_salary ?? 0,
    //         'allowance' => $request->allowance ?? 0,
    //         'bonus' => $request->bonus ?? 0,
    //         'overtime_salary' => $request->overtime_salary ?? 0,
    //         'insurance_deduction' => $request->insurance_deduction ?? 0,
    //         'tax_deduction' => $request->tax_deduction ?? 0,
    //         'late_penalty' => $request->late_penalty ?? 0,
    //         'performance_score' => $request->performance_score ?? 0,
    //     ]);

    //     return response()->json(['success' => true]);
    // }

    /**
     * POST: /salary/delete/{id}
     * -----------------------------------------
     * 📌 xoá salary
     */
    public function destroy(
        $id,
        SalaryService $service
    ) {
        $service->delete($id);

        return response()->json([
            'success' => true,
        ]);
    }
    // public function destroy($id)
    // {
    //     $salary = SalaryMechanism::findOrFail($id);
    //     $salary->delete();

    //     return response()->json(['success' => true]);
    // }

    /**
     * GET: /salary/export
     * -----------------------------------------
     * 📌 export Excel
     */
    public function export()
    {
        return Excel::download(
            new SalaryExport,
            'salary.xlsx'
        );
    }
}
// Request
//  ↓
// StoreSalaryRequest
//  ↓
// validate
//  ↓
// Controller
//  ↓
// Service
//  ↓
// Repository
//  ↓
// DB

// namespace Modules\Salary\App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Modules\Salary\App\Services\SalaryService;
// use Modules\Salary\App\Http\Requests\StoreSalaryRequest;
// use Modules\Salary\App\Models\SalaryMechanism;
// use Modules\User\App\Models\User;
// use Yajra\DataTables\Facades\DataTables;
// use Maatwebsite\Excel\Facades\Excel;
// use Modules\Salary\App\Exports\SalaryExport;

// /**
//  * =========================
//  * CONTROLLER (LIGHTWEIGHT)
//  * =========================
//  */
// class SalaryController extends Controller
// {
//     public function index()
//     {
//         return view('salary::index', [
//             'users' => User::all()
//         ]);
//     }

//     public function store(StoreSalaryRequest $request, SalaryService $service)
//     {
//         $service->store($request->validated());
//         return response()->json(['success' => true]);
//     }

//     public function update(StoreSalaryRequest $request, $id, SalaryService $service)
//     {
//         $service->update($id, $request->validated());
//         return response()->json(['success' => true]);
//     }

//     public function destroy($id, SalaryService $service)
//     {
//         $service->delete($id);
//         return response()->json(['success' => true]);
//     }

//     /**
//      * =========================
//      * DATATABLE (CACHE MODE)
//      * =========================
//      */
//     public function data(SalaryService $service)
//     {
//         $data = $service->getCachedData();

//         return DataTables::of($data)
//             ->addColumn('employee_name', fn($r) => $r->user->name ?? '')
//             ->addColumn('department', fn($r) => $r->user->part->name ?? '')
//             ->addColumn('position', fn($r) => $r->user->position->name ?? '')
//             ->addColumn('total_salary', fn($r) => $r->total_salary)
//             ->addColumn('performance', function ($row) {

//                 if ($row->performance_score >= 80) {
//                     return 'Tốt';
//                 }

//                 if ($row->performance_score >= 50) {
//                     return 'Khá';
//                 }

//                 return 'Yếu';
//             })
//             ->make(true);
//     }

//     /**
//      * EXPORT EXCEL
//      */
//     public function export()
//     {
//         return Excel::download(new SalaryExport, 'salary.xlsx');
//     }
// }

// Controller → Service → Repository → Query Builder + Cache
