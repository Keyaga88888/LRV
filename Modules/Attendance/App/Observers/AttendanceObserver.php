<?php

namespace Modules\Attendance\App\Observers;

use Illuminate\Support\Facades\Cache;
use Modules\Attendance\App\Infrastructure\Cache\AttendanceDashboardCache;
use Modules\Attendance\App\Models\Attendance;

class AttendanceObserver
{
    private function clearCache(): void
    {
        Cache::forget('attendance_today');

        Cache::forget('attendance.dashboard');

        Cache::forget('attendance.dashboard.advanced');

        Cache::forget('attendance_all');

        Cache::forget('attendance_summary_today');
    }

    public function created(
        Attendance $attendance
    ): void {
        AttendanceDashboardCache::forgetAll();
    }

    public function updated(
        Attendance $attendance
    ): void {
        AttendanceDashboardCache::forgetAll();
    }

    public function deleted(
        Attendance $attendance
    ): void {
        AttendanceDashboardCache::forgetAll();
    }
}
