<?php

namespace Modules\Attendance\App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Modules\Attendance\App\Mail\AttendanceSummaryMail;
use Modules\Attendance\App\Services\AttendanceSummaryService;

class AttendanceDailySummaryJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;

    public int $timeout = 120;

    public function __construct()
    {
        $this->onQueue('attendance');
    }

    public function handle(
        AttendanceSummaryService $service
    ): void {

        Cache::forget(
            'attendance_today'
        );

        $data =
            $service->summaryToday();

        // Cache::put(
        //     'attendance_today',
        //     $data,
        //     now()->addDay()
        // );
        Cache::tags([
            'attendance',
        ])->put(
            'attendance_today',
            $data,
            now()->addDay()
        );

        logger()->info(
            'ATTENDANCE SUMMARY',
            $data
        );
        Mail::to(
            'admin@company.com'
        )->queue(
            new AttendanceSummaryMail(
                $data
            )
        );
    }

    public function failed(
        \Throwable $exception
    ): void {

        logger()->error(
            'ATTENDANCE SUMMARY FAILED',
            [
                'message' => $exception->getMessage(),
            ]
        );
    }

    public function tags(): array
    {
        return [
            'attendance',
            'summary',
        ];
    }
}
// php artisan module:make-job AttendanceDailySummaryJob Attendance
