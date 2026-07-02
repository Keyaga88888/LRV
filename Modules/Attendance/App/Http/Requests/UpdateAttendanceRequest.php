<?php

namespace Modules\Attendance\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Modules\User\App\Models\User;

class UpdateAttendanceRequest extends FormRequest
{
    public function authorize(): bool
    {
        /** @var User|null $user */
        $user = Auth::user();

        return $user !== null
            && $user->hasPermissionTo('attendance.edit');
    }

    public function rules(): array
    {
        return [

            'check_in' => ['nullable', 'date'],

            'check_out' => ['nullable', 'date'],

            // 'late_minutes' => ['nullable', 'numeric', 'min:0'],

            // 'work_hours' => ['nullable', 'numeric', 'min:0'],

            // 'overtime_hours' => ['nullable', 'numeric', 'min:0'],

            'status' => [
                'required',
                'in:present,late,absent,leave',
            ],
        ];
    }
}
