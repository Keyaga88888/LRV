<?php

namespace Modules\Attendance\App\Application\Handlers;

use Modules\Attendance\App\Application\Commands\CreateAttendanceCommand;
use Modules\Attendance\App\Models\Attendance;

class CreateAttendanceHandler
{
    public function handle(
        CreateAttendanceCommand $command
    ): Attendance {

        return Attendance::create([
            'user_id' => $command->dto->userId,
            'work_date' => $command->dto->workDate,
            'check_in' => $command->dto->checkIn,
            'check_out' => $command->dto->checkOut,
            'status' => $command->dto->status,
        ]);
    }
}
