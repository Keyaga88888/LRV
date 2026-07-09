<?php

use Illuminate\Support\Facades\Route;
use Modules\Attendance\App\Http\Controllers\AttendanceActionController;
use Modules\Attendance\App\Http\Controllers\AttendanceApprovalController;
use Modules\Attendance\App\Http\Controllers\AttendanceController;
use Modules\User\App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::post(
    '/login',
    [AuthController::class, 'login']
);

Route::middleware(
    'auth:sanctum'
)->post(
    '/logout',
    [AuthController::class, 'logout']
);

/*
|--------------------------------------------------------------------------
| Attendance API    Đây là API dành cho: Bên thứ ba gọi API > Mobile App , React , Vue , Flutter , React Native
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    // Route::apiResource('attendances', AttendanceController::class)->names('attendance');
    Route::get('/attendances', [AttendanceController::class, 'apiList']);
    Route::post(
        '/check-in',
        [AttendanceActionController::class, 'checkIn']
    );

    Route::post(
        '/check-out',
        [AttendanceActionController::class, 'checkOut']
    );
    Route::post(
        '/attendances/{attendance}/approve',
        [AttendanceApprovalController::class, 'approve']
    );

    Route::post(
        '/attendances/{attendance}/reject',
        [AttendanceApprovalController::class, 'reject']
    );

});
// Nhiệm vụ :
// Khai báo API.
// Khai báo : API | Sanctum | Approve | Reject | Check In | Check Out
// Luồng :
// Mobile > api.php > Controller > Service > Database

// Đây là luồng mình ráp được từ toàn bộ source bạn đã gửi. Mình đi theo đúng thứ tự Browser → Route → Controller → Service → Repository → Model → Event → Job → Mail → View.

// 1. Attendance CRUD (Quan trọng nhất)
// Browser
// │
// │ index.blade.php
// │
// ├── DataTable
// ├── AJAX
// ├── Create
// ├── Edit
// ├── Delete
// │
// ▼
// Modules/Attendance/routes/web.php
// │
// ▼
// AttendanceController
// │
// ├── index()
// ├── data()
// ├── store()
// ├── update()
// ├── destroy()
// │
// ▼
// AttendanceService
// │
// ├── create()
// │      │
// │      ├── AttendanceCalculator::calculate()
// │      │
// │      ├── Attendance::create()
// │      │
// │      └── event(
// │             AttendanceCreated
// │         )
// │
// └── update()
//        │
//        ├── AttendanceCalculator
//        │
//        └── Attendance->update()
// │
// ▼
// Attendance Model
// │
// ▼
// Database
// File note
// Modules/Attendance/routes/web.php

// Modules/Attendance/App/Http/Controllers/
// AttendanceController.php

// Modules/Attendance/App/Services/
// AttendanceService.php

// Modules/Attendance/App/Services/
// AttendanceCalculator.php

// Modules/Attendance/App/Models/
// Attendance.php

// Modules/Attendance/resources/views/
// index.blade.php

// 2. Dashboard Summary
// Dashboard >  web.php > AttendanceController | dashboard()
// > AttendanceSummaryService > cache()->remember() > Attendance Model
// > JSON > AJAX | index.blade.php >
//                v
// $('#present')
// $('#late')
// $('#leave')
// $('#absent')
// Note file :
// AttendanceController.php
// AttendanceSummaryService.php
// Attendance.php
// index.blade.php

// 3. Dashboard Chart
// Chart.js > index.blade.php | AJAX | /dashboard-advanced
// > web.php > AttendanceController | dashboardAdvanced() >
// AttendanceDashboardService | advancedStats() > Attendance::selectRaw()
// > labels | totals > JSON > Chart.js
// Note file :
// AttendanceDashboardService.php
// AttendanceController.php
// index.blade.php

// 4. DataTable
// index.blade.php > AJAX > attendance.data > AttendanceController | data()
// > AttendanceRepository > Attendance Model > Yajra DataTable > JSON > DataTable JS
// Note file :
// AttendanceRepository.php
// AttendanceRepositoryInterface.php
// AttendanceController.php
// index.blade.php

// 5. Export Excel
// Button Export > index.blade.php > web.php > AttendanceExportController
// > AttendanceExport > Laravel Excel > Download
// Note file :
// AttendanceExportController.php
// AttendanceExport.php
// index.blade.php

// 6. Export PDF
// Button > AttendancePdfController > attendance.blade.php > DomPDF > Download PDF
// Note file :
// AttendancePdfController.php
// attendance.blade.php

// 7. Export PDF Queue
// Button > AttendanceController | exportPdf() > ExportAttendancePdfJob
// > Queue > Mail > attendance_export.blade.php
// Note file :
// AttendanceController.php
// ExportAttendancePdfJob.php
// attendance_export.blade.php

// 8. Attendance Approve
// Approve Button > index.blade.php > AJAX > web.php > AttendanceApprovalController | approve()
// > Attendance | update() > Mail > attendance-approved.blade.php
// Note file :
// AttendanceApprovalController.php
// attendance-approved.blade.php

// 9. Attendance Reject
// Reject Button > AttendanceApprovalController | reject() > Attendance
// > Mail > rejected.blade.php
// Note file :
// AttendanceApprovalController.php
// rejected.blade.php

// 10. Check In
// Button > AttendanceActionController | checkIn() > AttendanceService
// > Attendance > Mail > check-in.blade.php
// Note file:
// AttendanceActionController.php
// AttendanceService.php
// check-in.blade.php

// 11. Check Out
// Button > AttendanceActionController > checkOut() > AttendanceCalculator
// > Attendance > Mail > check-out.blade.php
// Note file :
// AttendanceActionController.php
// AttendanceCalculator.php
// check-out.blade.php

// 12. Event
// AttendanceService | create() > AttendanceCreated Event > Listener
// > Queue > Mail
// Note file :
// AttendanceService.php
// AttendanceCreated.php
// EventServiceProvider.php
// Listener

// 13. API
// API > api.php > AttendanceController | apiList() > AttendanceRepository
// > AttendanceCollection > AttendanceResource > JSON
// Note file :
// api.php
// AttendanceController.php
// AttendanceCollection.php
// AttendanceResource.php

// 14. Schedule
// Kernel > schedule.php > attendance:summary > AttendanceSummaryCommand
// > AttendanceSummaryService > Mail
// Note file :
// schedule.php
// AttendanceSummaryCommand.php
// AttendanceSummaryService.php

// 15. Test
// Feature Test > AttendanceService > Database > Assert
// Note file :
// tests/Feature
// tests/Unit
// =============================
// FILE NÊN NOTE TRONG PORTFOLIO

// Đây là những file "đắt giá" nhất để nhà tuyển dụng xem:

// 1. Controller
// Modules/Attendance/App/Http/Controllers/
// AttendanceController.php
// 2. Service Layer
// AttendanceService.php
// AttendanceDashboardService.php
// AttendanceSummaryService.php
// AttendanceCalculator.php
// 3. Repository Pattern
// AttendanceRepository.php
// AttendanceRepositoryInterface.php
// 4. Model
// Attendance.php
// 5. Resource API
// AttendanceResource.php
// AttendanceCollection.php
// 6. Event
// AttendanceCreated.php
// 7. Job
// ExportAttendancePdfJob.php
// ExportAttendanceExcelJob.php
// 8. Mail
// AttendanceApprovedMail.php
// AttendanceRejectedMail.php
// 9. Command
// AttendanceSummaryCommand.php
// 10. Blade
// resources/views/index.blade.php
// 11. Routes
// routes/web.php
// routes/api.php
// 12. Tests
// AttendanceApiTest.php
// AttendanceCrudTest.php
// AttendanceDashboardTest.php
// AttendanceServiceTest.php
// AttendanceFeatureTest.php
// 13. Module Config
// module.json
// composer.json
// vite.config.js
// 14. Database
// AttendanceSeeder.php
// AttendanceFactory.php
// Luồng quan trọng nhất (đi phỏng vấn thường hỏi)
// Browser
//     │
//     ▼
// index.blade.php
//     │
// AJAX / DataTable
//     │
//     ▼
// routes/web.php
//     │
//     ▼
// AttendanceController
//     │
//     ▼
// AttendanceService
//     │
//     ├── AttendanceCalculator
//     ├── AttendanceRepository (nếu đọc dữ liệu)
//     ├── Event
//     ├── Job
//     └── Cache
//     │
//     ▼
// Attendance Model (Eloquent)
//     │
//     ▼
// Database
//     │
//     ▲
// JSON / Resource
//     │
//     ▼
// Blade (DataTable / Chart.js / SweetAlert)

// Đây là luồng end-to-end đầy đủ của module Attendance theo kiến trúc Module → Controller → Service Layer → Repository Pattern → Model → Event/Job → Resource → View, cũng là phần giá trị nhất để đưa vào Portfolio và trình bày khi phỏng vấn.
