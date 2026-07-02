<?php

namespace Modules\Attendance\App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Attendance\App\Events\AttendanceCreated;

class CalculateAttendanceSalary implements ShouldQueue
{
    public $queue = 'attendance';

    public function handle(
        AttendanceCreated $event
    ): void {

        Log::info(
            'Attendance Salary Trigger',
            [
                'attendance_id' => $event->attendance->id,
            ]
        );
    }
}
