<?php

namespace Modules\Attendance\App\Services;

use Modules\Attendance\App\Models\Attendance;

class AttendanceSummaryService
{
    public function summaryToday()
    {
        return cache()->remember(

            'attendance_summary_today',

            now()->addHour(),

            function () {

                $today =
                    now()->toDateString();

                return [

                    'present' => Attendance::whereDate(
                        'work_date',
                        $today
                    )
                        ->where(
                            'status',
                            'present'
                        )
                        ->count(),

                    'late' => Attendance::whereDate(
                        'work_date',
                        $today
                    )
                        ->where(
                            'status',
                            'late'
                        )
                        ->count(),

                    'absent' => Attendance::whereDate(
                        'work_date',
                        $today
                    )
                        ->where(
                            'status',
                            'absent'
                        )
                        ->count(),

                    'leave' => Attendance::whereDate(
                        'work_date',
                        $today
                    )
                        ->where(
                            'status',
                            'leave'
                        )
                        ->count(),

                ];
            }
        );
    }
}
