<?php

namespace Modules\Attendance\App\Services;

use Carbon\Carbon;

class AttendanceCalculator
{
    // AttendanceCalculator.php - Business Logic độc lập.
    // Tính: Late Minutes | Work Hours | Overtime Hours
    public static function calculate(
        $checkIn,
        $checkOut
    ): array {

        $lateMinutes = 0;

        $workHours = 0;

        $overtimeHours = 0;

        if (! $checkIn) {

            return [

                'late_minutes' => 0,
                'work_hours' => 0,
                'overtime_hours' => 0,

            ];
        }

        $checkInTime = Carbon::parse($checkIn);

        $officeStart = Carbon::parse(
            $checkInTime->format('Y-m-d').' 08:00:00' // Mốc tính đi trễ = 08:00:00
        );

        if (
            $checkInTime->gt($officeStart)
        ) {

            $lateMinutes =
                $officeStart->diffInMinutes(
                    $checkInTime
                );
        }

        if ($checkOut) {

            $checkOutTime =
                Carbon::parse($checkOut);

            $workMinutes =
                $checkInTime->diffInMinutes(
                    $checkOutTime
                );

            $workHours =
                round(
                    $workMinutes / 60,
                    2
                );

            if ($workHours > 8) {

                $overtimeHours =
                    round(
                        $workHours - 8,
                        2
                    );
            }
        }

        return [

            'late_minutes' => $lateMinutes,

            'work_hours' => $workHours,

            'overtime_hours' => $overtimeHours,

        ];
    }
}
