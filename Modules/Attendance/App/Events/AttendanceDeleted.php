<?php

namespace Modules\Attendance\App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AttendanceDeleted implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public int $id
    ) {}

    public function broadcastOn()
    {
        return [new Channel('attendance-channel')];
    }

    public function broadcastAs()
    {
        return 'attendance.deleted';
    }

    public function broadcastWith()
    {
        return [
            'id' => $this->id,
        ];
    }
}
