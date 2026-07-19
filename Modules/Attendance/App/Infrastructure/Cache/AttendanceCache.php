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
                'present' => Attendance::where('status', 'present')->count(), // Attendance::where(...) > nối với file models > CompanyScope::apply() > Sau đó mới: ->leftJoin(...)
                'late' => Attendance::where('status', 'late')->count(), // Attendance::where(...) > nối với file models > CompanyScope::apply() > Sau đó mới: ->leftJoin(...)
                'absent' => Attendance::where('status', 'absent')->count(), // Attendance::where(...) > nối với file models > CompanyScope::apply() > Sau đó mới: ->leftJoin(...)
                'leave' => Attendance::where('status', 'leave')->count(), // Attendance::where(...) > nối với file models > CompanyScope::apply() > Sau đó mới: ->leftJoin(...)
            ]
        );
    }
}
