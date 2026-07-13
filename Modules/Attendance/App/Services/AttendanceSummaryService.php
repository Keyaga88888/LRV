<?php

namespace Modules\Attendance\App\Services;

use Modules\Attendance\App\Models\Attendance;

class AttendanceSummaryService
{
    public function summaryToday() // khai báo realtime > phải query database mỗi lần.
    {// cái này của bảng 4 số thống kê
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

// Người dùng
//       │
//       ▼
// Create / Update / Delete / Approve / Reject
//       │
//       ▼
// AttendanceController
//       │
//       ▼
// AttendanceService
//       │
//       ├──────────────► Lưu database
//       │
//       └──────────────► event(new AttendanceCreated())
//                          hoặc
//                          AttendanceUpdated
//                          AttendanceDeleted
//                          AttendanceApproved
//                          AttendanceRejected
//                                 │
//                                 ▼
//                         Laravel Reverb
//                                 │
//                                 ▼
//                  attendance-channel
//                                 │
//                                 ▼
//                     resources/js/app.js
//                                 │
//                                 ▼
//      ┌─────────────────────────────────────────┐
//      │ .listen(".attendance.created")          │
//      │ .listen(".attendance.updated")          │
//      │ .listen(".attendance.deleted")          │
//      │ .listen(".attendance.approved")         │
//      │ .listen(".attendance.rejected")         │
//      └─────────────────────────────────────────┘
//                 │
//      ┌──────────┼──────────────┐
//      ▼          ▼              ▼
// reloadAttendance() reloadSummary() reloadChart()
//      │               │               │
//      ▼               ▼               ▼
// DataTable      /dashboard-summary   /dashboard-advanced
//      │               │               │
//      ▼               ▼               ▼
// AJAX          AttendanceSummary   AttendanceDashboardService
//                    Service
//      │               │               │
//      ▼               ▼               ▼
// Cập nhật bảng   Đếm 4 trạng thái    Thống kê đi trễ
//      │               │               │
//      ▼               ▼               ▼
// DataTable      Present/Late/...     Chart.js update()

// Create Attendance
//       │
//       ▼
// AttendanceCreated Event
//       │
//       ▼
// Reverb Broadcast
//       │
//       ▼
// app.js
// window.reloadSummary()

//       │
//       ▼
// GET /attendance/dashboard-summary

//       │
//       ▼
// AttendanceController

//       │
//       ▼
// AttendanceSummaryService

//       │
//       ▼
// return

// {
//    present,
//    late,
//    absent,
//    leave
// }

//       │
//       ▼
// $("#present").text(...)
// $("#late").text(...)
// $("#absent").text(...)
// $("#leave").text(...)
