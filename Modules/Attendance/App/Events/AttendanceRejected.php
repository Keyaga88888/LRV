<?php

namespace Modules\Attendance\App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\Attendance\App\Models\Attendance;

class AttendanceRejected implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public Attendance $attendance) {}

    public function broadcastOn()
    {
        return [new Channel('attendance-channel')];
    }

    public function broadcastAs()
    {
        return 'attendance.rejected';
    }

    public function broadcastWith()
    {
        return [
            'id' => $this->attendance->id,
            'status' => $this->attendance->approval_status,
            'user_id' => $this->attendance->user_id,
        ];
    }
}
