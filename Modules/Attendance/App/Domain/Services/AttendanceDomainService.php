<?php

namespace Modules\Attendance\App\Domain\Services;

use Modules\Attendance\App\Services\AttendanceCalculator;

class AttendanceDomainService
{
    public function calculate(
        ?string $checkIn,
        ?string $checkOut
    ): array {

        return AttendanceCalculator::calculate(
            $checkIn,
            $checkOut
        );
    }
}
