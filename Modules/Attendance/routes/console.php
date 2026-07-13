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
// Nhiệm vụ : Khai báo Scheduler.  | cái này khỏi chạy thử công: php artisan schedule:work , ko cần gọi: php artisan attendance:summary
// Khai báo : Attendance Summary |  Queue Cleanup | Cache Flush
// Luồng : Cron > schedule:run > console.php > Command
// Linux Cron > php artisan schedule:run > Kernel > attendance:summary

// routes/web.php — Khai báo Web Routes, middleware và phân quyền.
// routes/api.php — Khai báo REST API với Sanctum.
// routes/console.php — Khai báo Scheduler (Cron Jobs).
// App/Services/AttendanceService.php — Business Logic của module.
// App/Services/AttendanceDashboardService.php — Dashboard, thống kê và dữ liệu biểu đồ.
// App/Services/AttendanceSummaryService.php — Tổng hợp thống kê theo ngày.
// App/Transformers/AttendanceResource.php — Chuẩn hóa dữ liệu trả về API.
// App/Transformers/AttendanceCollection.php — Chuẩn hóa dữ liệu phân trang.
// Database/Factories/AttendanceFactory.php — Sinh dữ liệu giả phục vụ test.
// Database/Seeders/AttendanceSeeder.php — Seed dữ liệu mẫu.
// resources/views/index.blade.php — Giao diện chính (DataTables, Chart.js, AJAX, CRUD).
// resources/views/attendance.blade.php — Mẫu xuất PDF.
// module.json — Khai báo module và Service Providers.
// composer.json — Cấu hình PSR-4 Autoload cho module.
// vite.config.js — Cấu hình build tài nguyên frontend của module.
// package.json — Quản lý các dependency frontend.

// Routes: web.php, api.php, console.php
// *Controllers:
//  AttendanceController.php - Controller chính của Module Attendance: Nhận Request từ Route , Gọi Service , Trả View hoặc JSON.
//    Luồng:web.php > AttendanceController > AttendanceService > AttendanceRepository > Attendance Model
//  AttendanceActionController.php - Chỉ xử lý: Check In , Check Out
//    Luồng:Button Check In > AttendanceActionController > AttendanceActionService (hoặc Attendance Model) > Database
//  AttendanceApprovalController.php - Chỉ xử lý: Approve , Reject
//    Luồng:Approve Button > AttendanceApprovalController > Attendance > Mail > Broadcast > Database
//  DashboardController.php - Chỉ trả dữ liệu Dashboard
//     Ví dụ::dashboard() | dashboardAdvanced()| dashboardRealtime()
//    Luồng:Ajax > DashboardController > AttendanceDashboardService > Chart.js
//  AttendanceExportController - Xuất Excel.
//    Luồng:Export Excel > AttendanceExportController > Export Class > Excel Download
//  AttendancePdfController - Xuất PDF.
//    Luồng:Export PDF > AttendancePdfController > Blade > DomPDF > PDF
// *Services/Contracts:
//  AttendanceServiceInterface.php - Contract cho Service. | Giúp Dependency Injection.
// *Services:
//  AttendanceService.php -
//  AttendanceDashboardService - Redis Cache | Dashboard Performance Optimization
//  AttendanceSummaryService -
//  AttendanceCalculator - Đây là Business Logic độc lập.
//    Tính:Late Minutes | Work Hours | Overtime
// *Repositories:
//  AttendanceRepository.php - Toàn bộ Query Database.
//      Ví dụ: find() | all() | create() | update() | delete()
//  AttendanceRepositoryInterface.php - Định nghĩa Contract.
//      Ví dụ: find() | create() | delete()
//         AttendanceRepository phải implement.
// *Models:
//  Attendance.php - Model thao tác Database.
//     Khai báo:fillable | cast | relationship | scope
//      Ví dụ:today() | pending() | approved()

// *Events Real time (Reverb) là WebSocket Server:
//  AttendanceCreated.php - NV: Event.
//  và các Listener liên quan
//    Được bắn khi:AttendanceService > event(new AttendanceCreated())
// *Listeners:
//  AttendanceLogListener.php - Nghe Event | Audit Log
//  NV: Lưu lịch sử.
//  SendAttendanceMail.php - Nghe Event.
//  ClearAttendanceCache.php - Nghe Event
//  BroadcastAttendance.php - Nghe Event | Broadcast Channel
//  NV: Realtime  |  Laravel Echo |  Reverb
// *Jobs:
//  AttendanceDailySummaryJob.php - Đưa công việc nặng vào Queue.
//  ExportAttendancePdfJob.php -  Đưa công việc nặng vào Queue.
//  ExportAttendanceExcelJob.php - Đưa công việc nặng vào Queue.
//  SendAttendanceApprovedMailJob.php - Đưa công việc nặng vào Queue.
// *Mail & Views: các Mailable và Blade email
// *Export Class
// AttendanceExport.php - Sinh Excel.
// *Notification:
//  AttendanceCreatedNotification - Thông báo Database. | Broadcast. | Mail.
// *Policies:
//  AttendancePolicy.php - Authorize.
//      viewAny() | create() | update() | delete()
// *Requests:
//  StoreAttendanceRequest.php - chặn Validate dữ liệu.
//  UpdateAttendanceRequest.php - chặn Validate dữ liệu.
// *Middleware:
//  CheckAttendancePermission.php - Chặn Request.
// *Transformers: AttendanceResource, AttendanceCollection
// *Factories & Seeders
// *Tests: Feature và Unit Test
// *Providers:
//  AttendanceServiceProvider.php - NV:Boot Module | Bind Repository | Load Route | Load Migration | Load View | Load Config
//  EventServiceProvider.php - NV: Khai báo: Event > Listener
// *Console Command:
// VD: attendance:summary AttendanceSummaryCommand.php NV: Tạo Artisan Command.
// Được gọi từ:
// routes/console.php > AttendanceSummaryCommand.php > AttendanceSummaryService.php
// *Observer
//  AttendanceObserver.php - Nghe created | updated | deleted của Attendance.

// *Frontend: index.blade.php, Vite, DataTables, Chart.js, AJAX
