<?php

namespace Modules\Attendance\App\Services;

use Modules\Attendance\App\Models\Attendance;

class AttendanceSummaryService
{
    public function summaryToday() // khai báo realtime > phải query database mỗi lần.
    {// cái này của 4 số thống kê
        return [
            'present' => Attendance::whereDate('work_date', today())
                ->where('status', 'Present')
                ->count(),

            'late' => Attendance::whereDate('work_date', today())
                ->where('status', 'Late')
                ->count(),

            'absent' => Attendance::whereDate('work_date', today())
                ->where('status', 'Absent')
                ->count(),

            'leave' => Attendance::whereDate('work_date', today())
                ->where('status', 'Leave')
                ->count(),
        ];
    }
}
// Nhiệm vụ :  Tổng hợp thống kê trong ngày.
// Khai báo : Present |  Late |  Absent | Leave
// Luồng :
// AttendanceService > AttendanceSummaryService > Cache > Attendance Model
