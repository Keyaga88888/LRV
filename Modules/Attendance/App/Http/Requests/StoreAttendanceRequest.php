<?php

namespace Modules\Attendance\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Modules\User\App\Models\User;

class StoreAttendanceRequest extends FormRequest
{
    // StoreAttendanceRequest chặn kiểm tra trước khi Validate | Authorize Request | Validate dữ liệu
    public function authorize(): bool
    {
        /** @var User|null $user */
        $user = Auth::user();

        return $user !== null
            && $user->hasPermissionTo(
                'attendance.create'
            );
    }

    public function rules(): array
    {
        return [

            'user_id' => [
                'required',
                'exists:users,id',
            ],

            'work_date' => [
                'required',
                'date',

                Rule::unique('attendances')
                    ->where(function ($query) {

                        return $query->where(
                            'user_id',
                            $this->user_id
                        );
                    }),
            ],

            'check_in' => [
                'nullable',
                'date',
            ],

            'check_out' => [
                'nullable',
                'date',
                'after_or_equal:check_in',
            ],

            'late_minutes' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'work_hours' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'overtime_hours' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'status' => [
                'required',
                'in:present,late,absent,leave',
            ],

        ];
    }

    public function messages(): array
    {
        return [

            'work_date.unique' => 'Nhân viên đã có dữ liệu chấm công trong ngày này.',

            'check_out.after_or_equal' => 'Check Out phải lớn hơn hoặc bằng Check In.',

            'status.in' => 'Trạng thái không hợp lệ.',

        ];
    }
}
