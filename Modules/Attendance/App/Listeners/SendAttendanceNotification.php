<?php

namespace Modules\Attendance\App\Listeners;

use Modules\Attendance\App\Events\AttendanceCreated;
use Modules\Attendance\App\Notifications\AttendanceCreatedNotification;

class SendAttendanceNotification
{
    public function handle(
        AttendanceCreated $event
    ): void {

        logger()->info(
            'SEND ATTENDANCE NOTIFICATION'
        );

        logger()->info(
            'USER',
            [
                'id' => $event->attendance->user?->id,
                'email' => $event->attendance->user?->email,
            ]
        );

        $event->attendance
            ->user
            ?->notify(
                new AttendanceCreatedNotification
            );

        logger()->info(
            'NOTIFICATION SENT'
        );
    }
}
// Tạo chấm công
//     ↓
// AttendanceCreated Event
//     ↓
// SendAttendanceNotification
//     ↓
// AttendanceCreatedNotification
//     ↓
// Gửi mail
