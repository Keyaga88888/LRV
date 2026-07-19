<?php

namespace Modules\Attendance\App\Application\Handlers;

use Modules\Attendance\App\Application\Commands\CreateAttendanceCommand;
use Modules\Attendance\App\Events\AttendanceCreated;
use Modules\Attendance\App\Models\Attendance;

class CreateAttendanceHandler
{
    public function handle(
        CreateAttendanceCommand $command
    ): Attendance {

        $attendance = Attendance::create([

            'user_id' => $command->dto->userId,

            'work_date' => $command->dto->workDate,

            'check_in' => $command->dto->checkIn,

            'check_out' => $command->dto->checkOut,

            'status' => $command->dto->status,

        ]);

        event(new AttendanceCreated($attendance));

        return $attendance;
    }
}
// Đây mới là nơi query.
// thao tác nút theo luồng CQRS
