<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schedule;
use Modules\Attendance\App\Jobs\ExportAttendanceExcelJob;

Schedule::command('attendance:summary')
    ->dailyAt('23:59')
    ->onOneServer()
    ->withoutOverlapping();
// Tự động dọn Queue lỗi
Schedule::command(
    'queue:prune-failed --hours=48'
)->daily();
// Tự động Export Excel mỗi ngày
// Schedule::job(
//     new ExportAttendanceExcelJob(1)
// )
//     ->dailyAt('18:00');
// Tự động xoá cache Attendance

Schedule::call(function () {

    Cache::tags([
        'attendance',
    ])->flush();
})->daily();
