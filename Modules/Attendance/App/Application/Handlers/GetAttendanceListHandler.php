<?php

namespace Modules\Attendance\App\Application\Handlers;

use Modules\Attendance\App\Models\Attendance;

class GetAttendanceListHandler
{
    public function handle()
    {
        return Attendance::query()
            ->with('user')
            ->latest()
            ->paginate(20);
    }
}
