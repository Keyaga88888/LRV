<?php

namespace Modules\Attendance\App\Services\Contracts;

use Modules\Attendance\App\Models\Attendance;

interface AttendanceServiceInterface
{
    // AttendanceServiceInterface.php : Contract của Service | Dependency Injection | Giảm phụ thuộc Controller.
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
