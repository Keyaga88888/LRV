<?php

namespace Modules\Attendance\App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\Attendance\App\Models\Attendance;

class AttendanceApproved implements ShouldBroadcastNow
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public Attendance $attendance;

    public function __construct(
        Attendance $attendance
    ) {
        $this->attendance = $attendance;
    }

    public function broadcastOn(): array
    {
        return [
            new Channel( // Channel: là kênh công khai (public channel) . Bất kỳ ai cũng có thể subscribe.
                'attendance-channel'
            ),
        ];
    }

    public function broadcastAs(): string
    {
        return 'attendance.approved';
    }

    public function broadcastWith(): array
    {
        return [

            'id' => $this->attendance->id,

            'status' => $this->attendance->approval_status,

            'user_id' => $this->attendance->user_id,

        ];
    }
}// 12. Websocket                   composer require laravel/reverb      |     php artisan reverb:install
