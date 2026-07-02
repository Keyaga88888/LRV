<?php

namespace Modules\Attendance\App\Policies;

use Modules\Attendance\App\Models\Attendance;
use Modules\User\App\Models\User;

class AttendancePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo(
            'attendance.view'
        );
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo(
            'attendance.create'
        );
    }

    public function update(
        User $user,
        Attendance $attendance
    ): bool {
        return $user->hasPermissionTo(
            'attendance.edit'
        );
    }

    public function delete(
        User $user,
        Attendance $attendance
    ): bool {
        return $user->hasPermissionTo(
            'attendance.delete'
        );
    }
}
