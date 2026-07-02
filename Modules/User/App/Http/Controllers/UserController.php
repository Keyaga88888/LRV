<?php

namespace Modules\User\App\Http\Controllers;

// use Modules\User\App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Modules\User\App\Models\User;
use Modules\User\App\Repositories\Interfaces\UserRepositoryInterface;

// use Yajra\DataTables\DataTables; // ko dùng tới vì đã chuyển qua UserRepository.php

class UserController extends Controller
{
    // tạo biến để dùng UserRepositoryInterface.php
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository; // userRepository=protected $userRepository;   |  $userRepository=(UserRepositoryInterface $userRepository)

    }

    // Giao diện
    public function index()
    {
        // return view('users.list');//này là cách gọi view bên ngoài
        return view('user::users.list'); // này là cách gọi view bên trong Modules

    }

    // cách 1    |   nếu dùng cách 2 thì coment all cách 1
    public function getFilters() // vào route/wed.php
    {
        return response()->json($this->userRepository->getFilters()); // getFilters() ở UserRepository.php
        // chuyển cái này qua UserRepository.php
        // $status_f = collect([
        //     ['id' => 1, 'text' => 'Nghỉ việc'],
        //     ['id' => 0, 'text' => 'Đang làm'],
        // ]);
        // $part_f = Part::select('id', 'name as text')->orderBy('name')->get();
        // $team_f = Team::select('id', 'name as text')->orderBy('name')->get();
        // $role_f = TypeAccount::select('id', 'name as text')->orderBy('name')->get();
        // return response()->json([
        //     'status_f' => $status_f,
        //     'part_f' => $part_f,
        //     'team_f' => $team_f,
        //     'role_f' => $role_f
        // ]);
    }

    public function getUsersData(Request $request)
    {
        if ($request->ajax()) { // dùng cách 2 thì bỏ cái này
            return $this->userRepository->getUsersData($request); // getUsersData() ở UserRepository.php
            // chuyển cái này qua UserRepository.php
            // // $data = User::select(['id','name','email','created_at','updated_at' ]);
            // // gọi các function bảng đang dc nối + lấy all từ users
            // $users = User::with('part', 'position', 'team', 'typeAccount');
            // $users->orderByDesc('created_at');
            // // Kiểm tra filter   d.part_id      |   lấy ra dữ liệu mới   |   table ko vẫn giữ dử liệu cũ thì qua view strip chỉnh
            // if ($request->filled('part_id')) { // chọn cột trong nút select filled() nếu có data trả về thì = true |ko = rỗng     |  //dùng cách 2 thì bỏ cái này
            //     $users->where('part_id', $request->part_id);
            // }
            // // Kiểm tra filter   d.status
            // if ($request->filled('status')) { // chọn cột trong nút select filled() nếu có data trả về thì = true |ko = rỗng     |  //dùng cách 2 thì bỏ cái này
            //     $users->where('status', $request->status);
            // }
            // // Kiểm tra filter   d.team
            // if ($request->filled('team')) { // chọn cột trong nút select filled() nếu có data trả về thì = true |ko = rỗng     |  //dùng cách 2 thì bỏ cái này
            //     $users->where('team_id', $request->team);
            // }
            // // Kiểm tra filter   d.type_account_id
            // if ($request->filled('type_account_id')) { // chọn cột trong nút select filled() nếu có data trả về thì = true |ko = rỗng     |  //dùng cách 2 thì bỏ cái này
            //     $users->where('type_account_id', $request->type_account_id);
            // }
            // return DataTables::of($users)

            //     ->addIndexColumn() // Tạo cột số thứ tự tự động | trả dữ liệu cho datatable resources/views/users/list.blade.php
            //     ->editColumn('sex', function ($row) { //editColumn() sủa thông tin hiển thị
            //         return $row->sex == 0 ? 'Nam' : 'Nữ';
            //     })

            //     ->editColumn('part_id', function ($row) {
            //         return $row->part->name ?? '';
            //     })
            //     // cách2
            //     // ->filterColumn('part_id', function ($query, $keyword) { //filterColumn() ko dung kiểu mặc định mà dùng custom theo tên bảng | = query hiện tại của User | = giá trị user chọn filter

            //     // $query->whereHas('part', function ($q) use ($keyword) {
            //     //         $q->where('name', 'like', "%{$keyword}%");
            //     //     });
            //     // })

            //     ->editColumn('position_id', function ($row) {
            //         return $row->position?->name ?? '';
            //     })
            //     // cách2
            //     // ->filterColumn('position_id', function ($query, $keyword) {
            //     //     $query->whereHas('position', function ($q) use ($keyword) {
            //     //         $q->where('name', 'like', "%{$keyword}%");
            //     //     });
            //     // })

            //     ->editColumn('type_work', function ($row) {
            //         return $row->sex == 0 ? 'Fulltime' : 'Parttime';
            //     })
            //     ->editColumn('position_id', function ($row) {
            //         return $row->position?->name ?? '';
            //     })

            //     ->editColumn('team_id', function ($row) {
            //         return $row->team->name ?? '';
            //     })
            //     ->editColumn('status', function ($row) {
            //         return $row->status == 0 ? 'Đang làm' : 'Nghỉ việc';
            //     })

            //     ->editColumn('type_account_id', function ($row) {
            //         return $row->typeAccount->name ?? ''; //function typeAccount>gọi bảng TypeAccount=type_account_id ->trỏ tới cột name
            //     })
            //     ->addColumn('action', function ($row) {

            //     // nhớ tạo link trong route/wed.php nối vào thẻ này   |   tạo thêm cái file edit.blade.php
            //     // này bình thường   onsubmit="return confirm(\'Bạn có chắc muốn xoá?\')">      |  đổi qua SweetAlert2 thì gắn script vào layout
            //     return '
            //    <div class="d-flex align-items-center justify-content-center">
            //         <a href="' . route('users.edit', $row->id) . '"
            //            class="btn btn-light border btn-sm mr-2 action-btn edit-btn">
            //             <i class="fas fa-pen"></i>
            //         </a>
            //         <form action="' . route('users.delete', $row->id) . '"
            //               method="POST">
            //               ' . csrf_field() . '
            //               ' . method_field('DELETE') . '
            //               <button type="submit"
            //                   class="btn btn-light border btn-sm action-btn delete-btn">
            //                <i class="fas fa-trash-alt"></i>
            //           </button>
            //          </form>
            //    </div>
            //     ';
            //         //                 return '

            //         // <div class="d-flex">

            //         //     <button class="btn btn-warning btn-sm mr-2">
            //         //         <i class="fas fa-edit"></i>
            //         //     </button>

            //         //     <button class="btn btn-danger btn-sm">
            //         //         <i class="fas fa-trash"></i>
            //         //     </button>

            //         // </div>

            //         // ';
            //     })

            //     // chỉnh cái nút SEARCH tìm kiếm thì vào UserController chỉnh
            //     ->filter(function ($query) use ($request) {
            //         $search = $request->input('search.value');
            //         if ($search !== null && $search !== '') { //nếu $search khác null và khác rỗng
            //             $like = '%' . trim($search) . '%'; //like trong SQL | trim() xoá khoảng trắng
            //             $query->where(function ($q) use ($like) {
            //                 // $q->orWhere('users.name', 'like', $like)//orWhere so khớp với 1 trong nhìu cột | so khớp bảng users với cột name | like so khớp
            //                 $q->orWhere('name', 'like', $like)->orWhere('email', 'like', $like)->orWhere('phone', 'like', $like)->orWhere('address', 'like', $like); //orWhere so khớp với 1 trong nhìu cột | so khớp bảng users với cột name | like so khớp
            //             });
            //         }
            //     })
            //     ->rawColumns(['action'])
            //     ->make(true);
        }
    }
    // Hàm load dữ liệu ô input  |  cho kết hợp với function create cho ra view  |  add.blade.php
    // nếu khai báo hết function ở  UserRepository.php thì bỏ cái function này ở đây
    // public function fromOptions()
    // {

    //     // chuyển cái này qua UserRepository.php
    //     // return [
    //     //     'part' => Part::select('id', 'name as text')->orderBy('name')->get(),
    //     //     'position' => Position::select('id', 'name as text')->orderBy('name')->get(),
    //     //     'team' => Team::select('id', 'name as text')->orderBy('name')->get(),
    //     //     'type_account_idd' => TypeAccount::select('id', 'name as text')->orderBy('name')->get(),
    //     //     'genders' => [
    //     //         ['id' => 0, 'text' => 'Nam'],
    //     //         ['id' => 1, 'text' => 'Nữ'],
    //     //     ],
    //     //     'type_workk' => [
    //     //         ['id' => 0, 'text' => 'Fulltime'],
    //     //         ['id' => 1, 'text' => 'Parttime'],
    //     //     ],
    //     //     'status' => [
    //     //         ['id' => 0, 'text' => 'Đang làm'],
    //     //         ['id' => 1, 'text' => 'Nghỉ việc'],
    //     //     ],
    //     // ];
    // }
    public function create() // lấy hàm nối vào input
    {
        // session()->forget('_old_input');
        // $option = $this->fromOptions(); // lấy dữ liệu từ form option
        $option = $this->userRepository->fromOptions(); // lấy dữ liệu từ form option   |  //fromOptions() ở UserRepository.php

        // return view('users.add', [ //này là cách gọi view bên ngoài
        return view('user::users.add', [ // này là cách gọi view bên trong Modules
            'option' => $option,
            'mode' => 'create',
            'user' => new User, // User rỗng=value="" có khoảng trống cho điền vào

        ]);
    }

    // VALIDATE kiểm tra trước khi vào db
    public function store(Request $request)
    {
        $validated = $request->validate([
            // CRUD gắn cho từng ô input tên thẻ
            'name' => ['required', 'string', 'max:255'], // bắt buộc , kiểu chuổi , tối đa bao nhiu ký tự |  name của thẻ form name="name"
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')], // bắt buộc , định dạng email , tối đa bao nhiu ký tự,unique() 1 lần duy nhất-bảng users-cột email |  email của thẻ form name="email"
            'password' => ['required', 'string', 'min:6'],
            'birthday' => ['date', 'nullable'], // kiểu date , có thể numfmt_get_locale
            'sexx' => ['required'], // sexx của thẻ form name="sexx"
            'part_id' => ['integer', 'nullable', 'exists:parts,id'], // dạng số , có thể null , exists:kiểm bảngparts có cộtid đó ko
            'position_id' => ['integer', 'nullable', 'exists:positions,id'],
            'team_id' => ['integer', 'nullable', 'exists:teams,id'],
            'type_account_id' => ['integer', 'nullable', 'exists:type_accounts,id'],
            'type_work' => ['required'],
            'phone' => ['nullable', 'string', 'max:20'],
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            // storage/app/public/users
            'address' => ['nullable', 'string', 'max:255'],
            'statuss' => ['required'],
            'start_day' => ['nullable', 'date'],
            'end_day' => ['nullable', 'date'],
        ], [
            // tên thẻ
            'name.required' => 'Họ tên bắt buộc phải nhập',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Password bắt buộc phải nhập',
            'sexx.required' => 'Giói tính bắt buộc phải nhập',
            'type_work.required' => 'Hình thức làm bắt buộc phải nhập',
            'statuss.required' => 'Trạng thái bắt buộc phải nhập',
            'type_account_id.required' => 'Loại tài khoản bắt buộc phải nhập',

        ]);
        // dd($validated);
        // chuyển cái này qua UserRepository.php
        // User::create([
        //     // tên cột DB => tên thẻ
        //     'name' => $validated['name'],
        //     'email' => $validated['email'],
        //     'password' => Hash::make($validated['password']),
        //     'birthday' => $validated['birthday'],
        //     'sex' => $validated['sexx'],
        //     'part_id' => $validated['part_id'],
        //     'position_id' => $validated['position_id'],
        //     'team_id' => $validated['team_id'],
        //     'type_account_id' => $validated['type_account_id'],
        //     'type_work' => $validated['type_work'],
        //     'phone' => $validated['phone'],
        //     'address' => $validated['address'],
        //     'status' => $validated['statuss'],
        //     'start_day' => $validated['start_day'],
        //     'end_day' => $validated['end_day'],
        // ]);
        $this->userRepository->store($validated); // store()  ở UserRepository.php

        return redirect()->route('users.list')->with('success', 'Thêm mới tài khoản thành công'); // success là tên tự đặt | with() → tạo session flash để hiện thông báo 1 lần
    }

    public function edit(User $user)
    {
        // $option = $this->fromOptions(); // lấy dữ liệu từ form option
        $option = $this->userRepository->fromOptions(); // lấy dữ liệu từ form option  |  fromOptions()  ở UserRepository.php

        return view('user::users.edit', [// ::link trong module | . link bình thường bên ngoài
            'option' => $option,
            'mode' => 'edit',
            'user' => $user, // Lấy ra dữ liệu cũ từ User
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            // CRUD gắn cho từng ô input tên thẻ
            'name' => ['required', 'string', 'max:255'], // bắt buộc , kiểu chuổi , tối đa bao nhiu ký tự |  name của thẻ form name="name"
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)], // bắt buộc , định dạng email , tối đa bao nhiu ký tự,unique() 1 lần duy nhất-bảng users-cột email |  email của thẻ form name="email" | ignore() Bỏ qua record có id = user hiện tại > email cũ vẫn update được bình thường.
            'password' => ['nullable', 'string', 'min:6'],
            'birthday' => ['date', 'nullable'], // kiểu date , có thể numfmt_get_locale
            'sexx' => ['required'], // sexx của thẻ form name="sexx"
            'part_id' => ['integer', 'nullable', 'exists:parts,id'], // dạng số , có thể null , exists:kiểm bảngparts có cộtid đó ko
            'position_id' => ['integer', 'nullable', 'exists:positions,id'],
            'team_id' => ['integer', 'nullable', 'exists:teams,id'],
            'type_account_id' => ['integer', 'nullable', 'exists:type_accounts,id'],
            'type_work' => ['required'],
            'phone' => ['nullable', 'string', 'max:20'],
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'address' => ['nullable', 'string', 'max:255'],
            'statuss' => ['required'],
            'start_day' => ['nullable', 'date'],
            'end_day' => ['nullable', 'date'],
        ], [
            // tên thẻ
            'name.required' => 'Họ tên bắt buộc phải nhập',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Password bắt buộc phải nhập',
            'sexx.required' => 'Giói tính bắt buộc phải nhập',
            'type_work.required' => 'Hình thức làm bắt buộc phải nhập',
            'statuss.required' => 'Trạng thái bắt buộc phải nhập',
            'type_account_id.required' => 'Loại tài khoản bắt buộc phải nhập',

        ]);
        // chuyển cái này qua UserRepository.php
        // $dataUpdate = $validated; //Clone toàn bộ dữ liệu validate sang biến mới:
        // unset($dataUpdate['password']); // xoá field password khỏi mảng update
        // // - Có nhập password mới -> hash rồi update
        // // - Không nhập -> giữ nguyên password cũ
        // if (!empty($validated['password'])) { // nếu rỗng
        //     $dataUpdate['password'] = Hash::make($validated['password']); // thì có lệnh hash password update password mới Để cho nhập
        // }
        // // update
        // $user->update($dataUpdate);
        $this->userRepository->update($validated, $user); // update() ở UserRepository.php

        return redirect()->route('users.list')->with('success', 'Chỉnh sửa  tài khoản thành công'); // success là tên tự đặt | with() → tạo session flash để hiện thông báo 1 lần

    }

    public function destroy(User $user)
    {
        // chuyển cái này qua UserRepository.php
        // $user->delete();
        $this->userRepository->destroy($user); // destroy() ở UserRepository.php

        return redirect()->route('users.list')->with('success', 'Xoá tài khoản thành công');
    }
}
