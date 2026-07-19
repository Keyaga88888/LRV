<?php

namespace Modules\Attendance\App\Observers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Modules\Attendance\App\Infrastructure\Cache\AttendanceDashboardCache;
use Modules\Attendance\App\Models\Attendance;
use Modules\User\App\Models\User;

class AttendanceObserver
{
    // RealTime định nghĩa bắt event các nút > dẫn file xoá cache

    // private function clearCache(): void
    // {
    //     Cache::forget('attendance_today');

    //     Cache::forget('attendance.dashboard');

    //     Cache::forget('attendance.dashboard.advanced');

    //     Cache::forget('attendance_all');

    //     Cache::forget('attendance_summary_today');
    // }

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

    // Acc Login hiện tại chỉ có company_id:1 sẽ chỉ xem được attendance có company_id:1
    // Attendance nó có company_id:1 khi bảng công nó được tạo trong wed , còn không thì chạy vào trong db gõ thủ công trong chỉnh cái tên bảng module hiện tại
    public function creating(Attendance $attendance): void // ( Multi-Tenant ) Global Scope
    {
        if (Auth::check() && empty($attendance->company_id)) {
            /** @var User $user */
            $user = Auth::user();

            $attendance->company_id = $user->company_id;
        }
    }
    // lệnh xem Tinker: id-user , company_id-id
    // Attendance::withoutGlobalScopes()
    // ->select('id','company_id')
    // ->get();
}
