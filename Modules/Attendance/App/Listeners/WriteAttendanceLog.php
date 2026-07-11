<?php

namespace Modules\Attendance\App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Attendance\App\Events\AttendanceCreated;

// class WriteAttendanceLog
class WriteAttendanceLog implements ShouldQueue
{
    public $queue = 'attendance';

    public function handle(
        AttendanceCreated $event
    ): void {

        Log::info(
            'Attendance Created 1',
            [
                'attendance_id' => $event->attendance->id,
            ]
        );
    }
}
