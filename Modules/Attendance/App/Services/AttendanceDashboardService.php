<?php

namespace Modules\Attendance\App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Modules\Attendance\App\Models\Attendance;

class AttendanceDashboardService
{
    public function stats()
    {
        return Cache::remember(
            'attendance.dashboard',
            3600,
            function () {

                return [

                    'total' => Attendance::count(),

                    'today' => Attendance::today()->count(), // nối với file models

                    // Attendance::whereDate(
                    //     'work_date',
                    //     now()
                    // )->count(),

                    'late' => Attendance::where(
                        'late_minutes',
                        '>',
                        0
                    )->count(),
                ];
            }
        );
    }

    public function advancedStats()// cái này cho nối js để lấy dữ liệu gì để xuất ra view char | nếu lấy dữ liệu xuất ko cần thiết thì char bị lag ko hiện view
    {
        $days = now()->daysInMonth;

        $chart = Attendance::selectRaw('
        DAY(work_date) as day,
        COUNT(*) as total
    ')
            ->whereMonth('work_date', now()->month)
            ->whereYear('work_date', now()->year)
            ->where('late_minutes', '>', 0)
            ->groupBy(DB::raw('DAY(work_date)'))
            ->pluck('total', 'day');

        $labels = [];
        $totals = [];

        for ($i = 1; $i <= $days; $i++) {

            $labels[] = $i;

            $totals[] = $chart[$i] ?? 0;
        }

        return [

            'labels' => $labels,

            'totals' => $totals,

        ];
    }

    public function realtimeStats() // khi projec lớn hơn thì tách ra AttendanceDashboardController
    {
        return [

            'total' => Attendance::count(),

            'today' => Attendance::today()->count(),

            'pending' => Attendance::pending()->count(),

            'approved' => Attendance::where(
                'approval_status',
                'approved'
            )->count(),

            'rejected' => Attendance::where(
                'approval_status',
                'rejected'
            )->count(),

            'labels' => [
                'Pending',
                'Approved',
                'Rejected',
            ],

            'chart' => [

                Attendance::pending()->count(),

                Attendance::where(
                    'approval_status',
                    'approved'
                )->count(),

                Attendance::where(
                    'approval_status',
                    'rejected'
                )->count(),

            ],

        ];
    }
    //     public function advancedStats()
    //     {
    //         return Cache::remember(
    //             'attendance.dashboard.advanced',
    //             300,
    //             function () {

    //                 return [

    //                     'present' =>
    //                     Attendance::whereStatus(
    //                         'present'
    //                     )->count(),

    //                     'late' =>
    //                     Attendance::whereStatus(
    //                         'late'
    //                     )->count(),

    //                     'absent' =>
    //                     Attendance::whereStatus(
    //                         'absent'
    //                     )->count(),

    //                     'leave' =>
    //                     Attendance::whereStatus(
    //                         'leave'
    //                     )->count(),

    //                     'total_work_hours' =>
    //                     Attendance::sum(
    //                         'work_hours'
    //                     ),

    //                     'total_ot_hours' =>
    //                     Attendance::sum(
    //                         'overtime_hours'
    //                     ),

    //                     'avg_late_minutes' =>
    //                     Attendance::avg(
    //                         'late_minutes'
    //                     ),

    //                     'monthly_chart' =>
    //                     Attendance::selectRaw("
    //     DATE(work_date) as day,
    //     COUNT(*) as total
    // ")
    //                         ->whereNotNull('work_date')
    //                         ->whereMonth(
    //                             'work_date',
    //                             now()->month
    //                         )
    //                         ->whereYear(
    //                             'work_date',
    //                             now()->year
    //                         )
    //                         ->groupBy(DB::raw('DATE(work_date)'))
    //                         ->orderBy(DB::raw('DATE(work_date)'))
    //                         ->get(),
    //                 ];
    //             }
    //         );
    //     }
    // php artisan cache:clear
    // php artisan optimize:clear
}
