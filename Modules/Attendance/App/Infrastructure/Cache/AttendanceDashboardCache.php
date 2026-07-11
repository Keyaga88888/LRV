<?php

namespace Modules\Attendance\App\Infrastructure\Cache;

use Illuminate\Support\Facades\Cache;

class AttendanceDashboardCache
{
    // AttendanceDashboardCache.php: Xóa Cache Dashboard | để Dashboard tính lại.
    public static function remember(
        string $key,
        callable $callback
    ) {
        return Cache::remember(
            $key,
            3600,
            $callback
        );
    }

    public static function forgetAll()
    {
        Cache::forget(
            'attendance.dashboard'
        );

        Cache::forget(
            'attendance.dashboard.advanced'
        );

        Cache::forget(
            'attendance_today'
        );
    }
}
