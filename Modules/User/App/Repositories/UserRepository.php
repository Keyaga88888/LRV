<?php

namespace Modules\User\App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Modules\User\App\Models\Part;
use Modules\User\App\Models\Position;
use Modules\User\App\Models\Team;
use Modules\User\App\Models\TypeAccount;
use Modules\User\App\Models\User;
use Modules\User\App\Repositories\Interfaces\UserRepositoryInterface;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

// lỗi đường dẫn đã chỉnh vẫn lỗi vì chưa khai báo ở folder Models mini
class UserRepository implements UserRepositoryInterface
{
    public function getFilters(): array // vào route/wed.php
    {$status_f = collect([
            ['id' => 1, 'text' => 'Nghỉ việc'],
            ['id' => 0, 'text' => 'Đang làm'],
        ]);
        $part_f = Part::select('id', 'name as text')->orderBy('name')->get();
        $team_f = Team::select('id', 'name as text')->orderBy('name')->get();
        $role_f = TypeAccount::select('id', 'name as text')->orderBy('name')->get();

        return [
            'status_f' => $status_f,
            'part_f' => $part_f,
            'team_f' => $team_f,
            'role_f' => $role_f,
        ];
    }

    public function getUsersData(Request $request)
    {
        // $data = User::select(['id','name','email','created_at','updated_at' ]);
        // gọi các function bảng đang dc nối + lấy all từ users
        $users = User::with('part', 'position', 'team', 'typeAccount');
        $users->orderByDesc('created_at');
        // Kiểm tra filter   d.part_id      |   lấy ra dữ liệu mới   |   table ko vẫn giữ dử liệu cũ thì qua view strip chỉnh
        if ($request->filled('part_id')) { // chọn cột trong nút select filled() nếu có data trả về thì = true |ko = rỗng     |  //dùng cách 2 thì bỏ cái này
            $users->where('part_id', $request->part_id);
        }
        // Kiểm tra filter   d.status
        if ($request->filled('status')) { // chọn cột trong nút select filled() nếu có data trả về thì = true |ko = rỗng     |  //dùng cách 2 thì bỏ cái này
            $users->where('status', $request->status);
        }
        // Kiểm tra filter   d.team
        if ($request->filled('team')) { // chọn cột trong nút select filled() nếu có data trả về thì = true |ko = rỗng     |  //dùng cách 2 thì bỏ cái này
            $users->where('team_id', $request->team);
        }
        // Kiểm tra filter   d.type_account_id
        if ($request->filled('type_account_id')) { // chọn cột trong nút select filled() nếu có data trả về thì = true |ko = rỗng     |  //dùng cách 2 thì bỏ cái này
            $users->where('type_account_id', $request->type_account_id);
        }

        // dd(Auth::check(), Auth::user()?->email);
        return DataTables::of($users)
            ->addColumn('thumbnail', function ($row) {

                if ($row->thumbnail) {

                    return '
            <img
                src="'.asset('storage/'.$row->thumbnail).'"

                style="
                    width:45px;
                    height:45px;
                    object-fit:cover;
                    border-radius:50%;
                    border:1px solid #ddd;
                ">
        ';
                }

                return '
        <div style="
            width:45px;
            height:45px;
            border-radius:50%;
            background:#eee;
        "></div>
    ';
            })
            ->addIndexColumn() // Tạo cột số thứ tự tự động | trả dữ liệu cho datatable resources/views/users/list.blade.php
            ->editColumn('sex', function ($row) { // editColumn() sủa thông tin hiển thị
                return $row->sex == 0 ? 'Nam' : 'Nữ';
            })

            ->editColumn('part_id', function ($row) {
                return $row->part->name ?? '';
            })
            // cách2
            // ->filterColumn('part_id', function ($query, $keyword) { //filterColumn() ko dung kiểu mặc định mà dùng custom theo tên bảng | = query hiện tại của User | = giá trị user chọn filter

            // $query->whereHas('part', function ($q) use ($keyword) {
            //         $q->where('name', 'like', "%{$keyword}%");
            //     });
            // })

            ->editColumn('position_id', function ($row) {
                return $row->position?->name ?? '';
            })
            // cách2
            // ->filterColumn('position_id', function ($query, $keyword) {
            //     $query->whereHas('position', function ($q) use ($keyword) {
            //         $q->where('name', 'like', "%{$keyword}%");
            //     });
            // })

            ->editColumn('type_work', function ($row) {
                return $row->type_work == 0 ? 'Fulltime' : 'Parttime';
            })
            ->editColumn('position_id', function ($row) {
                return $row->position?->name ?? '';
            })

            ->editColumn('team_id', function ($row) {
                return $row->team->name ?? '';
            })
            ->editColumn('status', function ($row) {
                return $row->status == 0 ? 'Đang làm' : 'Nghỉ việc';
            })

            ->editColumn('type_account_id', function ($row) {
                return $row->typeAccount->name ?? ''; // function typeAccount>gọi bảng TypeAccount=type_account_id ->trỏ tới cột name
            })
            ->addColumn('action', function ($row) {

                // nhớ tạo link trong route/wed.php nối vào thẻ này   |   tạo thêm cái file edit.blade.php
                // này bình thường   onsubmit="return confirm(\'Bạn có chắc muốn xoá?\')">      |  đổi qua SweetAlert2 thì gắn script vào layout
                // dd(Auth::user());
                $html = '<div class="d-flex align-items-center justify-content-center">';

                /** @var User|null $user */
                $user = Auth::user();

                if ($user && $user->hasPermissionTo('user.edit')) {
                    $html .= '
        <a href="'.route('users.edit', $row->id).'"
           class="btn btn-light border btn-sm mr-2">
            <i class="fas fa-pen"></i>
        </a>';
                }

                if ($user && $user->hasPermissionTo('user.delete')) {
                    $html .= '
        <form action="'.route('users.delete', $row->id).'"
              method="POST">
            '.csrf_field().'
            '.method_field('DELETE').'
            <button type="submit"
                class="btn btn-light border btn-sm delete-btn">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>';
                }

                $html .= '</div>';

                return $html;

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
            })

            // chỉnh cái nút SEARCH tìm kiếm thì vào UserController chỉnh
            ->filter(function ($query) use ($request) {
                $search = $request->input('search.value');
                if ($search !== null && $search !== '') { // nếu $search khác null và khác rỗng
                    $like = '%'.trim($search).'%'; // like trong SQL | trim() xoá khoảng trắng
                    $query->where(function ($q) use ($like) {
                        // $q->orWhere('users.name', 'like', $like)//orWhere so khớp với 1 trong nhìu cột | so khớp bảng users với cột name | like so khớp
                        // $q->orWhere('name', 'like', $like)->orWhere('email', 'like', $like)->orWhere('phone', 'like', $like)->orWhere('address', 'like', $like); //orWhere so khớp với 1 trong nhìu cột | so khớp bảng users với cột name | like so khớp
                        $q->orWhere('name', 'like', $like)
                            ->orWhere('email', 'like', $like)
                            ->orWhere('phone', 'like', $like)
                            ->orWhere('address', 'like', $like)
                            ->orWhere('birthday', 'like', $like)
                            ->orWhere('start_day', 'like', $like)
                            ->orWhere('end_day', 'like', $like);
                        $q->orWhereRaw("DATE_FORMAT(birthday,'%d/%m/%Y') LIKE ?", [$like])
                            ->orWhereRaw("DATE_FORMAT(start_day,'%d/%m/%Y') LIKE ?", [$like])
                            ->orWhereRaw("DATE_FORMAT(end_day,'%d/%m/%Y') LIKE ?", [$like]);
                        // Part
                        $q->orWhereHas('part', function ($sub) use ($like) {
                            $sub->where('name', 'like', $like);
                        });

                        // Position
                        $q->orWhereHas('position', function ($sub) use ($like) {
                            $sub->where('name', 'like', $like);
                        });

                        // Team
                        $q->orWhereHas('team', function ($sub) use ($like) {
                            $sub->where('name', 'like', $like);
                        });

                        // TypeAccount
                        $q->orWhereHas('typeAccount', function ($sub) use ($like) {
                            $sub->where('name', 'like', $like);
                        });

                    });
                    if (str_contains(strtolower($search), 'nam')) {
                        $query->orWhere('sex', 0);
                    }

                    if (str_contains(strtolower($search), 'nữ')) {
                        $query->orWhere('sex', 1);
                    }

                    if (str_contains(strtolower($search), 'đang làm')) {
                        $query->orWhere('status', 0);
                    }

                    if (str_contains(strtolower($search), 'nghỉ việc')) {
                        $query->orWhere('status', 1);
                    }

                    if (str_contains(strtolower($search), 'full')) {
                        $query->orWhere('type_work', 0);
                    }

                    if (str_contains(strtolower($search), 'part')) {
                        $query->orWhere('type_work', 1);
                    }
                }
            })
            ->rawColumns([
                'thumbnail',
                'action'])
            ->make(true);
    }

    public function fromOptions(): array
    {
        return [
            'users' => User::with(['part', 'position'])
                ->orderBy('name')
                ->get(),
            'part' => Part::select('id', 'name as text')->orderBy('name')->get(),
            'position' => Position::select('id', 'name as text')->orderBy('name')->get(),
            'team' => Team::select('id', 'name as text')->orderBy('name')->get(),
            'type_account' => TypeAccount::select('id', 'name as text')->orderBy('name')->get(),
            'genders' => [
                ['id' => 0, 'text' => 'Nam'],
                ['id' => 1, 'text' => 'Nữ'],
            ],
            'type_workk' => [
                ['id' => 0, 'text' => 'Fulltime'],
                ['id' => 1, 'text' => 'Parttime'],
            ],
            'status' => [
                ['id' => 0, 'text' => 'Đang làm'],
                ['id' => 1, 'text' => 'Nghỉ việc'],
            ],
        ];
    }
    // function ko có truy vấn data thì khỏi cho vào

    // public function store(Request $request);
    public function store(array $validated): User
    {
        // upload thumbnail
        if (isset($validated['thumbnail'])) {

            $path = $validated['thumbnail']
                ->store('users', 'public');

            $validated['thumbnail'] = $path;
        }
        //  $user = User::create([ > User mới tạo sẽ tự động được gán role theo type_account_id.
        $user = User::create([
            // tên cột DB => tên thẻ
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'birthday' => $validated['birthday'],
            'sex' => $validated['sexx'],
            'part_id' => $validated['part_id'],
            'position_id' => $validated['position_id'],
            'team_id' => $validated['team_id'],
            'type_account_id' => $validated['type_account_id'],
            'type_work' => $validated['type_work'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'status' => $validated['statuss'],
            'start_day' => $validated['start_day'],
            'end_day' => $validated['end_day'],
            'thumbnail' => $validated['thumbnail'] ?? null,

        ]);
        // v User mới tạo sẽ tự động được gán role theo type_account_id.
        $type = TypeAccount::find($validated['type_account_id']);

        if ($type) {
            $user->syncRoles(trim($type->name));
        }

        return $user;
    }

    public function update(array $validated, User $user): bool
    {

        $dataUpdate = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            // 'password' => Hash::make($validated['password']),// bỏ
            'birthday' => $validated['birthday'],
            'sex' => $validated['sexx'],
            'part_id' => $validated['part_id'],
            'position_id' => $validated['position_id'],
            'team_id' => $validated['team_id'],
            'type_account_id' => $validated['type_account_id'],
            'type_work' => $validated['type_work'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'status' => $validated['statuss'],
            'start_day' => $validated['start_day'],
            'end_day' => $validated['end_day'],

        ];
        if (! empty($validated['password'])) { // nếu rỗng
            $dataUpdate['password'] = Hash::make($validated['password']); // thì có lệnh hash password update password mới Để cho nhập
        }
        // upload thumbnail
        if (! empty($validated['thumbnail'])) {// nếu chưa có ảnh
            // xoá ảnh cũ
            if ($user->thumbnail) { // nếu chọn ảnh
                Storage::disk('public')->delete($user->thumbnail); // thì xoá ảnh cũ
            }
            // upload ảnh mới
            $path = $validated['thumbnail']->store('users', 'public'); // thì liên kết điều kiện > tải ảnh mói
            $dataUpdate['thumbnail'] = $path; // vào bảng thumbnail
        }
        $user->update($dataUpdate);

        $type = TypeAccount::find($validated['type_account_id']);

        if ($type) {
            $user->syncRoles(trim($type->name));
        }

        return true;
    }

    public function destroy(User $user): bool
    {
        // xoá ảnh trong db luôn
        if ($user->thumbnail) {

            Storage::disk('public')
                ->delete($user->thumbnail);
        }

        return $user->delete();
    }
}
