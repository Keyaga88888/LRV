<?php

namespace Modules\Attendance\App\Console;

use Illuminate\Console\Command;
use Modules\Attendance\App\Jobs\AttendanceDailySummaryJob;

class AttendanceSummaryCommand extends Command
{
    protected $signature =
        'attendance:summary';

    protected $description =
        'Attendance Daily Summary';

    public function handle()
    {
        AttendanceDailySummaryJob::dispatch()->onQueue('attendance');

        $this->info(
            'Attendance summary queued'
        );

        return self::SUCCESS;
    }
}
// php artisan module:make-command AttendanceSummaryCommand Attendance
/*
|--------------------------------------------------------------------------
| DAILY SUMMARY FLOW
|--------------------------------------------------------------------------
|
| COMMAND
|
| php artisan attendance:summary
|
| ↓
|
| AttendanceSummaryCommand.php
|
| FUNCTION:
| handle()
|
| ↓
|
| AttendanceSummaryService.php
|
| FUNCTION:
| summaryToday()
|
| ↓
|
| Attendance.php
|
| QUERY:
| whereDate()
| where()
| count()
|
| ↓
|
| summary.blade.php
|
| ↓
|
| Mail
|
*/
