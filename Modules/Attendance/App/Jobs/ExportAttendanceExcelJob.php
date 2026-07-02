<?php

namespace Modules\Attendance\App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Attendance\App\Exports\AttendanceExport;
use Modules\Attendance\App\Mail\AttendanceExportReady;
use Modules\User\App\Models\User;

class ExportAttendanceExcelJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;

    public int $timeout = 300;

    public function __construct(
        public int $userId
    ) {}

    public function handle(): void
    {
        logger()->info('EXPORT START');

        $filename =
            'exports/attendance_'.
            now()->format('YmdHis').
            '.xlsx';

        Excel::store(
            new AttendanceExport,
            $filename,
            'public'
        );

        logger()->info('FILE CREATED');

        $user = User::find(
            $this->userId
        );

        logger()->info(
            'MAIL TO',
            [
                'id' => $user->id,
                'email' => $user->email,
            ]
        );

        Mail::to(
            $user->email
        )->send(
            new AttendanceExportReady(
                $filename
            )
        );

        logger()->info('MAIL SENT');
    }
}
// php artisan queue:work

// User đăng nhập
//     ↓
// Bấm Export Excel
//     ↓
// auth()->id()
//     ↓
// Đẩy userId vào Queue
//     ↓
// Queue chạy
//     ↓
// User::find(userId)
//     ↓
// Lấy email user
//     ↓
// Gửi mail tới email đó
