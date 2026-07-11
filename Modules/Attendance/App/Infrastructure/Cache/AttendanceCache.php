<?php

namespace Modules\Attendance\App\Infrastructure\Cache;

use Illuminate\Support\Facades\Cache;
use Modules\Attendance\App\Models\Attendance;

class AttendanceCache
{
    // AttendanceCache.php: Xóa Cache Attendance sau khi tạo dữ liệu | Dashboard không bị lấy dữ liệu cũ
    public static function summary()
    {
        return Cache::remember(
            'attendance_dashboard',
            300,
            fn () => [
                'present' => Attendance::where('status', 'present')->count(),
                'late' => Attendance::where('status', 'late')->count(),
                'absent' => Attendance::where('status', 'absent')->count(),
                'leave' => Attendance::where('status', 'leave')->count(),
            ]
        );
    }
}
