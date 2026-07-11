<?php

namespace Modules\Attendance\App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Attendance\App\Events\AttendanceCreated;

// class AttendanceLogListener
class AttendanceLogListener implements ShouldQueue
{
    // AttendanceLogListener.php: Audit Log | Ghi lịch sử thao tác
    //         ^    v
    // AttendanceCreated.php
    public $queue = 'attendance';

    public function __construct()
    {
        //
    }

    public function handle(AttendanceCreated $event): void
    {
        Log::info(
            'Attendance Created',
            [
                'user_id' => $event->attendance->user_id,
            ]
        );
    }
}
// php artisan queue:work
