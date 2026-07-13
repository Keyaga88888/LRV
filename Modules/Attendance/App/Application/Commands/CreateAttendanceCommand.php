<?php

namespace Modules\Attendance\App\Application\Commands;

use Modules\Attendance\App\Domain\DTO\AttendanceDTO;

class CreateAttendanceCommand
{
    public function __construct(
        public AttendanceDTO $dto
    ) {}
}
// file Nó chỉ chứa dữ liệu.(Đóng gói dữ liệu)
