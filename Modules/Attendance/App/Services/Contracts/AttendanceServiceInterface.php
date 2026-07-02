<?php

namespace Modules\Attendance\App\Services\Contracts;

use Modules\Attendance\App\Models\Attendance;

interface AttendanceServiceInterface
{
    public function create(array $data): Attendance;

    public function update(
        Attendance $attendance,
        array $data
    ): Attendance;

    public function getDashboard(): array;

    public function findUserAttendance(
        int $userId
    );
}
