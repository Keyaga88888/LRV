<?php

namespace Modules\Attendance\App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;
use Modules\User\App\Models\User;

class CompanyScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        // // Chưa đăng nhập thì KHÔNG áp scope
        // if (! Auth::check()) {
        //     return;
        // }
        // /** @var \Modules\User\App\Models\User $user */ // Hoặc nếu muốn dùng hasRole() thì thêm type hint để IDE hiểu:
        // $user = Auth::user();

        // // Super Admin xem toàn bộ
        // if ($user->hasRole('Super Admin')) {
        //     return;
        // }

        // // Không có company thì thôi
        // if (!$user->company_id) {
        //     return;
        // }

        // $builder->where(
        //     $model->getTable() . '.company_id',
        //     $user->company_id
        // );
        if (! Auth::check()) {
            return;
        }
        /** @var User $user */ // Hoặc nếu muốn dùng hasRole() thì thêm type hint để IDE hiểu:
        $user = Auth::user();

        // Super Admin xem toàn bộ | Nhân viên bình thường chỉ thấy công ty của mình.
        if ($user->hasRole('Super Admin')) {
            return;
        }

        $builder->where(
            $model->getTable().'.company_id',
            $user->company_id
        );
    }
}

// Trong toàn bộ code bạn đã gửi, các câu query sau sẽ tự động gọi CompanyScope (nếu model đó đã đăng ký addGlobalScope(new CompanyScope)):
// ✅ Attendance::query()
// ✅ Attendance::count()
// ✅ Attendance::today()->count()
// ✅ Attendance::pending()->count()
// ✅ Attendance::where(...)->count()
// ✅ Attendance::selectRaw(...)
// ✅ Attendance::findOrFail($id)
// ✅ Mọi Attendance::... khác sử dụng Eloquent Builder

// Ngược lại, các câu lệnh dùng DB::table(), DB::select(), DB::raw() không đi qua Eloquent, nên không gọi CompanyScope.

// addGlobalScope(new CompanyScope) dùng để tự động thêm điều kiện vào mọi query của Model.
// mục đích chính là tách dữ liệu theo công ty (Multi-Tenant).

// Nếu KHÔNG dùng Global Scope

// Bạn sẽ phải viết ở mọi nơi:

// Attendance::where(
//     'company_id',
//     Auth::user()->company_id
// )->get();

// hoặc

// Attendance::where(
//     'company_id',
//     Auth::user()->company_id
// )->count();

// hoặc

// Attendance::where(
//     'company_id',
//     Auth::user()->company_id
// )->findOrFail($id);

// ...

// Hàng trăm câu query đều phải nhớ thêm điều kiện này.
