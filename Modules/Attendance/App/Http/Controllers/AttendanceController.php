<?php

namespace Modules\Attendance\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Attendance\App\Events\AttendanceCreated;
use Modules\Attendance\App\Events\AttendanceDeleted;
use Modules\Attendance\App\Events\AttendanceUpdated;
use Modules\Attendance\App\Http\Requests\StoreAttendanceRequest;
use Modules\Attendance\App\Http\Requests\UpdateAttendanceRequest;
use Modules\Attendance\App\Jobs\ExportAttendanceExcelJob;
use Modules\Attendance\App\Jobs\ExportAttendancePdfJob;
use Modules\Attendance\App\Models\Attendance;
use Modules\Attendance\App\Notifications\AttendanceCreatedNotification;
use Modules\Attendance\App\Repositories\AttendanceRepositoryInterface;
use Modules\Attendance\App\Services\AttendanceCalculator;
use Modules\Attendance\App\Services\AttendanceDashboardService;
use Modules\Attendance\App\Services\AttendanceService;
use Modules\Attendance\App\Transformers\AttendanceResource;
use Modules\User\App\Models\User;
use OpenApi\Attributes as OA;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\DataTables;

#[OA\Tag(
    name: 'Attendance',
    description: 'Attendance API'
)]
// chỉnh Swagger xong > php artisan l5-swagger:generate
class AttendanceController extends Controller
{
    private AttendanceDashboardService $dashboardService;

    private AttendanceRepositoryInterface $repository;

    private AttendanceService $attendanceService;

    public function index()
    {
        $users = User::orderBy('name')->get();

        // tránh lỗi PHPStan
        /** @var view-string $view */
        $view = 'attendance::index';

        return view($view, compact('users'));
    }
    #[OA\Get(
        path: '/api/v1/attendances/dashboard',
        summary: 'Dashboard Attendance',
        tags: ['Attendance']
    )]

    #[OA\Response(
        response: 200,
        description: 'Success'
    )]
    public function dashboard()
    {
        return response()->json(
            cache()->get('attendance_today')
        );
    }

    public function audit()
    {
        return Activity::latest()
            ->paginate(50);
    }

    public function __construct(
        AttendanceService $attendanceService,
        AttendanceRepositoryInterface $repository,
        AttendanceDashboardService $dashboardService
    ) {
        $this->attendanceService = $attendanceService;

        $this->repository = $repository;

        $this->dashboardService = $dashboardService;
    }

    // public function __construct(
    //     AttendanceService $attendanceService
    // ) {
    //     $this->attendanceService = $attendanceService;
    // }
    #[OA\Get(
        path: '/api/v1/attendances',
        summary: 'Attendance List',
        tags: ['Attendance'],
        security: [
            ['bearerAuth' => []],
        ]
    )]
    #[OA\Response(
        response: 200,
        description: 'Success'
    )]
    public function apiList()// data table
    {
        return AttendanceResource::collection(
            $this->repository->paginate()
        );
    }

    // public function apiList()
    // {
    //     return AttendanceResource::collection(
    //         Attendance::with('user')->paginate(20)
    //     );
    // }
    public function data()
    {
        $query = Attendance::query()
            ->select([
                'attendances.*',
                'users.name as employee_name',
                'parts.name as department_name',
                'positions.name as position_name',

                DB::raw("DATE_FORMAT(attendances.check_in, '%Y-%m-%d %H:%i:%s') as check_in_fmt"),
                DB::raw("DATE_FORMAT(attendances.check_out, '%Y-%m-%d %H:%i:%s') as check_out_fmt"),
                DB::raw("DATE_FORMAT(attendances.created_at, '%Y-%m-%d %H:%i:%s') as created_at_fmt"),
                DB::raw('DATE(attendances.work_date) as work_date_fmt'),
            ])
            ->leftJoin('users', 'users.id', '=', 'attendances.user_id')
            ->leftJoin('parts', 'parts.id', '=', 'users.part_id')
            ->leftJoin('positions', 'positions.id', '=', 'users.position_id');
        /******** PHPStan ********/
        /** @var DataTables $factory */
        $factory = app(DataTables::class);

        $dataTable = $factory->eloquent($query);

        return $dataTable
                    // ->filter(function ($query) {

                    //     $search = request()->input('search.value');

                    //     if (!$search) return;

                    //     $search = trim($search);

                    //     $date = null;

                    //     if (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $search)) {
                    //         $date = \Carbon\Carbon::createFromFormat('d/m/Y', $search)->format('Y-m-d');
                    //     }

                    //     $query->where(function ($q) use ($search, $date) {

                    //         $q->orWhere('users.name', 'like', "%$search%")
                    //             ->orWhere('parts.name', 'like', "%$search%")
                    //             ->orWhere('positions.name', 'like', "%$search%")
                    //             ->orWhere('attendances.status', 'like', "%$search%");

                    //         if ($date) {
                    //             $q->orWhereDate('attendances.work_date', $date)
                    //                 ->orWhereDate('attendances.created_at', $date)
                    //                 ->orWhereDate('attendances.check_in', $date)
                    //                 ->orWhereDate('attendances.check_out', $date);
                    //         }

                    //         if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $search)) {
                    //             $q->orWhereDate('attendances.work_date', $search)
                    //                 ->orWhereDate('attendances.created_at', $search)
                    //                 ->orWhereDate('attendances.check_in', $search)
                    //                 ->orWhereDate('attendances.check_out', $search);
                    //         }
                    //     });
                    // })
            ->filterColumn(
                'employee_name',
                fn ($q, $k) => $q->where('users.name', 'like', "%{$k}%")
            )
            ->filterColumn(
                'department',
                fn ($q, $k) => $q->where('parts.name', 'like', "%{$k}%")
            )
            ->filterColumn(
                'position',
                fn ($q, $k) => $q->where('positions.name', 'like', "%{$k}%")
            )
            ->filterColumn(
                'status',
                fn ($q, $k) => $q->where('attendances.status', 'like', "%{$k}%")
            )
            ->addColumn('employee_name', function ($row) {

                return '
    <div class="employee-hover-wrapper">

        <span
            class="employee-name"
            data-id="'.$row->user_id.'"
            data-score="'.rand(60, 100).'">
            '.$row->employee_name.'
        </span>

        <div class="employee-card">

            <div class="card">

                <div class="card-body">

                    <canvas
                        class="mini-chart"
                        width="230"
                        height="130">
                    </canvas>

                </div>

            </div>

        </div>

    </div>';
            })->addColumn('department', fn ($r) => $r->department_name ?? '')
            ->addColumn('position', fn ($r) => $r->position_name ?? '')
            ->addColumn('check_in', fn ($r) => $r->check_in_fmt)
            ->addColumn('check_out', fn ($r) => $r->check_out_fmt)
            ->addColumn('created_at', fn ($r) => $r->created_at_fmt)
            ->addColumn('work_date', fn ($r) => $r->work_date_fmt)
            ->addColumn('action', function ($row) {

                $user = Auth::user();
                if (! $user) {
                    return '';
                }

                $roles = $user->roles->pluck('name')->toArray();

                $canEdit = in_array('Admin', $roles)
                    || in_array('HR Manager', $roles)
                    || in_array('HR Staff', $roles);

                $canDelete = in_array('Admin', $roles)
                    || in_array('HR Manager', $roles);

                $html = '<div class="btn-group btn-group-sm">';

                if ($canEdit) {
                    $html .= '<button class="btn btn-outline-primary editBtn"
            data-id="'.$row->id.'"
            data-check_in="'.$row->check_in.'"
            data-check_out="'.$row->check_out.'"
            data-late_minutes="'.$row->late_minutes.'"
            data-work_hours="'.$row->work_hours.'"
            data-overtime_hours="'.$row->overtime_hours.'"
            data-status="'.$row->status.'">
            <i class="fas fa-pen"></i>
        </button>';
                }

                if ($canDelete) {
                    $html .= '<button class="btn btn-outline-danger deleteBtn"
            data-id="'.$row->id.'">
            <i class="fas fa-trash"></i>
        </button>';
                }

                if ($row->approval_status === 'pending') {

                    $html .= '
    <button
        class="btn btn-success approveBtn"
        data-id="'.$row->id.'">
        Approve
    </button>';

                    $html .= '
    <button
        class="btn btn-warning rejectBtn"
        data-id="'.$row->id.'">
        Reject
    </button>';
                }

                return $html.'</div>';
            })
            ->rawColumns([
                'employee_name',
                'action'])
            ->make(true);
    }

    #[OA\Post(
        path: '/api/v1/attendances',
        summary: 'Create Attendance',
        tags: ['Attendance']
    )]

    #[OA\RequestBody(
        required: true,
        content: new OA\JsonContent(
            required: [
                'user_id',
                'work_date',
                'check_in',
                'check_out',
                'status',
            ],

            properties: [
                new OA\Property(
                    property: 'user_id',
                    type: 'integer',
                    example: 1
                ),

                new OA\Property(
                    property: 'work_date',
                    type: 'string',
                    example: '2026-06-15'
                ),

                new OA\Property(
                    property: 'check_in',
                    type: 'string',
                    example: '2026-06-15 08:00:00'
                ),

                new OA\Property(
                    property: 'check_out',
                    type: 'string',
                    example: '2026-06-15 17:00:00'
                ),

                new OA\Property(
                    property: 'status',
                    type: 'string',
                    example: 'Present'
                ),
            ]
        )
    )]

    #[OA\Response(
        response: 200,
        description: 'Success'
    )]
    // public function store(Request $request)
    public function store(
        StoreAttendanceRequest $request
    ) {
        try {

            logger()->info(
                'STORE ATTENDANCE',
                $request->all()
            );

            $attendance = $this->attendanceService->create(
                $request->validated()
            );
            cache()->forget('attendance_today'); // ghi log ai đang tương tác chỉnh sửa

            // $attendance->user?->notify(
            //     new AttendanceCreatedNotification()
            // );  này là viết event trực tiếp
            event(
                new AttendanceCreated(
                    $attendance
                )
            ); // này là viết event nối các file
            /** @var User|null $user */
            $user = Auth::user();

            if (Auth::check()) {
                activity()
                    ->performedOn($attendance)
                    ->causedBy($user)
                    ->withProperties([
                        'ip' => request()->ip(),
                    ])
                    ->log('Attendance Created');
            }
            logger()->info(
                'CREATE SUCCESS',
                ['id' => $attendance->id]
            );

            return response()->json([
                'success' => true,
            ]);
        } catch (\Throwable $e) {

            logger()->error(
                'CREATE ERROR',
                [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                ]
            );

            throw $e;
        }

        // $calc = AttendanceCalculator::calculate(
        //     $request->check_in,
        //     $request->check_out
        // );

        // $attendance = null;

        // DB::transaction(function () use (&$attendance, $request, $calc) {

        //     $attendance = Attendance::create([
        //         'user_id'        => $request->user_id,
        //         'work_date'      => $request->work_date,
        //         'check_in'       => $request->check_in,
        //         'check_out'      => $request->check_out,
        //         'late_minutes'   => $calc['late_minutes'],
        //         'work_hours'     => $calc['work_hours'],
        //         'overtime_hours' => $calc['overtime_hours'],
        //         'status'         => $request->status,
        //     ]);
        // });

        // event(new AttendanceCreated($attendance));

        // return response()->json(['success' => true]);
    }

    #[OA\Put(
        path: '/api/v1/attendances/{id}',
        summary: 'Update Attendance',
        tags: ['Attendance']
    )]

    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]

    #[OA\Response(
        response: 200,
        description: 'Success'
    )]
    // public function update(Request $request, $id)
    public function update(
        UpdateAttendanceRequest $request,
        $id
    ) {
        $attendance =
            Attendance::findOrFail($id);

        /** @var User $user */
        $user = Auth::user();
        $this->attendanceService->update(
            $attendance,
            $request->validated()
        );
        cache()->forget('attendance_today'); // ghi log ai đang tương tác chỉnh sửa
        event(new AttendanceUpdated($attendance));
        if ($user) {
            activity()
                ->performedOn($attendance)
                ->causedBy($user)
                ->withProperties([
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                ])
                ->log('Attendance Updated');
        }

        return response()->json([
            'success' => true,
        ]);

        // $calc = AttendanceCalculator::calculate(
        //     $request->check_in,
        //     $request->check_out
        // );

        // $attendance->update([
        //     'check_in' => $request->check_in,
        //     'check_out' => $request->check_out,
        //     'late_minutes' => $calc['late_minutes'],
        //     'work_hours' => $calc['work_hours'],
        //     'overtime_hours' => $calc['overtime_hours'],
        //     'status' => $request->status,
        // ]);

        // return response()->json(['success' => true]);
    }

    #[OA\Delete(
        path: '/api/v1/attendances/{id}',
        summary: 'Delete Attendance',
        tags: ['Attendance']
    )]

    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]

    #[OA\Response(
        response: 200,
        description: 'Success'
    )]
    public function destroy($id)
    {
        $user = Auth::user();

        abort_if(! $user, 401);

        $roles = $user->roles->pluck('name')->toArray();

        abort_unless(
            in_array('Admin', $roles) || in_array('HR Manager', $roles),
            403
        );

        /** @var User $user */
        $user = Auth::user();
        $attendance =
            Attendance::findOrFail($id);
        activity()
            ->performedOn($attendance)
            ->causedBy($user)
            ->withProperties([
                'ip' => request()->ip(),
            ])
            ->log('Attendance Deleted');

        $attendance->delete();
        cache()->forget('attendance_today'); // ghi log ai đang tương tác chỉnh sửa
        event(new AttendanceDeleted($id));

        return response()->json(['success' => true]);
    }

    #[OA\Post(
        path: '/api/v1/attendances/export',
        summary: 'Export Attendance Excel',
        tags: ['Attendance']
    )]
    #[OA\Response(
        response: 200,
        description: 'Export queued'
    )]
    public function export()
    {
        ExportAttendanceExcelJob::dispatch(
            Auth::id()
        );

        return response()->json([
            'message' => 'Export queued',
        ]);
    }

    public function exportPdf()
    {
        ExportAttendancePdfJob::dispatch(
            Auth::id()
        );

        return response()->json([
            'message' => 'PDF queued',
        ]);
    }

    public function dashboardAdvanced() // cái này chuyển qua
    {

        return response()->json(

            app(
                AttendanceDashboardService::class
            )->advancedStats()

        );

    }

    public function dashboardData()// Realtime
    {
        return response()->json(

            $this->dashboardService->realtimeStats()

        );
    }
}

// 4. DASHBOARD CHART FLOW
// Page load
// File:
// index.blade.php
// Function:
// window.addEventListener('load')
// ↓
// Ajax
// GET /attendance/dashboard-advanced
// ↓
// Route
// routes/web.php
// ↓
// Controller
// AttendanceController.php
// Function:
// dashboardAdvanced()
// ↓
// Service
// AttendanceDashboardService.php
// Function:
// stats()
// ↓
// Model
// Attendance.php
// ↓
// DB
// ↓
// JSON
// ↓
// Chart.js
// new Chart(...)
// ↓
// Hiển thị biểu đồ

// 3. API LIST FLOW
// Request
// GET /api/v1/attendances
// ↓
// File
// routes/api.php
// Route::get(
//     '/attendances',
//     [AttendanceController::class,'apiList']
// );
// ↓
// Controller
// apiList()
// ↓
// Model
// Attendance::query()
// ↓
// Resource
// File:
// AttendanceResource.php
// Function:
// toArray()
// ↓
// Collection
// File:
// AttendanceCollection.php
// Function:
// toArray()
// ↓
// JSON Response
// {
//     "data":[],
//     "total":100
// }

// 5. EXPORT PDF FLOW
// Click
// Export PDF
// ↓
// Route
// /attendance/export/pdf
// ↓
// Controller
// AttendancePdfController.php
// Function:
// pdf()
// ↓
// Model
// Attendance::with('user')
// ↓
// View
// resources/views/attendance.blade.php
// ↓
// DOMPDF
// Pdf::loadView()
// ↓
// File PDF
// ↓
// Download
