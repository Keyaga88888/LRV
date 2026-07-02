<?php

namespace Modules\Attendance\App\Domain\DTO;

class AttendanceDTO
{
    public function __construct(
        public int $userId,
        public string $workDate,
        public ?string $checkIn,
        public ?string $checkOut,
        public string $status
    ) {}

    public static function fromRequest(array $data): self
    {
        return new self(
            userId: $data['user_id'],
            workDate: $data['work_date'],
            checkIn: $data['check_in'] ?? null,
            checkOut: $data['check_out'] ?? null,
            status: $data['status']
        );
    }
}
