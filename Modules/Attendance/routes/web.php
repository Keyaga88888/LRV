<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Laravel\Horizon\Horizon;
use Modules\Attendance\App\Http\Controllers\AttendanceActionController;
use Modules\Attendance\App\Http\Controllers\AttendanceApprovalController;
use Modules\Attendance\App\Http\Controllers\AttendanceController;
use Modules\Attendance\App\Http\Controllers\AttendanceExportController;
use Modules\Attendance\App\Http\Controllers\AttendancePdfController;
use Modules\Attendance\App\Http\Controllers\DashboardController;

Route::prefix('attendance')
    ->middleware(['web', 'auth'])
    ->group(function () {

        Route::get(
            '/',
            [AttendanceController::class, 'index']
        )
            ->middleware('permission:attendance.view')
            ->name('attendance.index');

        Route::get(
            '/data',
            [AttendanceController::class, 'data']
        )
            ->middleware('permission:attendance.view')
            ->name('attendance.data');

        Route::post(
            '/store',
            [AttendanceController::class, 'store']
        )
            ->middleware('permission:attendance.create')
            ->name('attendance.store');

        Route::post(
            '/update/{id}',
            [AttendanceController::class, 'update']
        )
            ->middleware('permission:attendance.edit')
            ->name('attendance.update');

        Route::post(
            '/delete/{id}',
            [AttendanceController::class, 'destroy']
        )
            ->middleware('permission:attendance.delete')
            ->name('attendance.delete');
        Route::get(
            '/export',
            [AttendanceController::class, 'export']
        )
            ->middleware('permission:attendance.view')
            ->name('attendance.export');
        Route::middleware(['auth:sanctum'])
            ->get(
                '/attendance/list',
                [AttendanceController::class, 'apiList']
            );
        Route::get(
            '/dashboard-summary',
            [AttendanceController::class, 'dashboard']
        );
        Route::get('/test-mail', function () {

            Mail::raw(
                'Hello',
                function ($mail) {
                    $mail->to('lychieuthan@gmail.com')
                        ->subject('Test');
                }
            );

            return 'OK';
        });
        Route::get(
            '/dashboard-advanced',
            [AttendanceController::class, 'dashboardAdvanced']
        );
        Route::get(
            '/audit-log',
            [AttendanceController::class, 'audit']
        );
        Route::get(
            '/export/excel',
            [AttendanceExportController::class, 'excel']
        );
        Route::get(
            '/export/pdf',
            [AttendancePdfController::class, 'pdf']
        );
        Route::post(
            '/export-pdf',
            [AttendanceController::class, 'exportPdf']
        )
            ->name('attendance.export.pdf');
        Route::post(
            '/check-in',
            [AttendanceActionController::class, 'checkIn']
        )->middleware('auth')
            ->name('attendance.checkin');
        Route::post(
            '/check-out',
            [AttendanceActionController::class, 'checkOut']
        )->name('attendance.checkout');
        Route::get('/time-test', function () {
            return now();
        });
        Route::post(
            '/approve/{attendance}',
            [AttendanceApprovalController::class, 'approve']
        )->name('attendance.approve');

        Route::post(
            '/reject/{attendance}',
            [
                AttendanceApprovalController::class,
                'reject',
            ]
        )->name('attendance.reject');
        // Nếu chưa có API này thì reloadDashboard() sẽ báo lỗi 404.  REALTIME
        Route::get(
            '/attendance/dashboard-data',
            DashboardController::class
        )->name('attendance.dashboard.data');

    });
// Controller → Service → Repository → Model
// app / Providers / AppServiceProvider . php
// php artisan make:event AttendanceCreated
// php artisan make:event AttendanceCreated

// tạo permisstion :
// php artisan tinker
// use Spatie\Permission\Models\Permission;
// Permission::firstOrCreate(['name' => 'attendance.view']);
// Permission::firstOrCreate(['name' => 'attendance.create']);
// Permission::firstOrCreate(['name' => 'attendance.edit']);
// Permission::firstOrCreate(['name' => 'attendance.delete']);
// cách 2
// php artisan make:seeder AttendancePermissionSeeder

// 11. DOCKER
// File
// Dockerfile
// docker-compose.yml
// docker/supervisor/laravel-worker.conf
// Luồng chạy
// docker-compose.yml
//         ↓
// Dockerfile
//         ↓
// Container PHP
//         ↓
// Laravel Project
//         ↓
// artisan commands
// docker-compose.yml

// Chạy toàn bộ service:

// services:
//     app
//     mysql
//     redis
// Dockerfile

// Build môi trường PHP

// FROM php:8.4-fpm

// Cài:

// PHP
// Composer
// Redis Extension
// PDO MySQL
// laravel-worker.conf

// Supervisor quản lý Queue Worker

// command=php artisan queue:work redis

// Luồng:

// Supervisor
//       ↓
// queue:work
//       ↓
// Job
//       ↓`
// handle()

// 12. WEBSOCKET
// Package
// composer require beyondcode/laravel-websockets

// hoặc

// composer require laravel/reverb
// File
// AttendanceApprovedEvent.php
// Luồng
// Approve Attendance

// AttendanceApprovalController
//         ↓
// approve()
//         ↓
// event(
//     new AttendanceApprovedEvent()
// )
//         ↓
// Broadcast
//         ↓
// Websocket Server
//         ↓
// Javascript Client
// Function
// public function approve()
// {
//     event(
//         new AttendanceApprovedEvent(
//             $attendance
//         )
//     );
// }
// Frontend
// Echo.channel('attendance')
// .listen(
//     'AttendanceApprovedEvent',
//     (e) => {
//         console.log(e);
//     }
// );

// 13. MICROSERVICE CƠ BẢN

// Hiện Attendance là Module.

// Tách ra thành Service riêng:

// HRM
//  ├── User Service
//  ├── Attendance Service
//  ├── Payroll Service
// Luồng
// Payroll
//       ↓
// HTTP Request
//       ↓
// Attendance API
//       ↓
// AttendanceController
//       ↓
// AttendanceService
//       ↓
// Database
// Ví dụ
// GET

// /api/v1/attendances
// File chạy
// routes/api.php

// AttendanceController.php

// AttendanceService.php

// 14. QUEUE EXPORT EXCEL
// File
// ExportAttendanceExcelJob.php
// Controller
// AttendanceController
// Function
// export()
// Luồng
// Click Export Excel

// index.blade.php
//         ↓
// route attendance.export
//         ↓
// AttendanceController@export
//         ↓
// dispatch(
//  ExportAttendanceExcelJob
// )
//         ↓
// jobs table
//         ↓
// queue worker
//         ↓
// ExportAttendanceExcelJob
//         ↓
// handle()
//         ↓
// Excel::store()
// Function chạy thật
// public function handle()
// {
//     Excel::store(...)
// }

// 15. SANCTUM
// File
// AuthController.php
// Login
// login()
// Luồng
// POST /api/login
//       ↓
// AuthController@login
//       ↓
// Auth::attempt()
//       ↓
// createToken()
//       ↓
// token
// Function
// $token =
// $user->createToken(
//     'api-token'
// )->plainTextToken;
// API
// routes/api.php
// Route::middleware(
//     'auth:sanctum'
// )
// Luồng API
// Request

// Bearer Token
//        ↓
// Sanctum Middleware
//        ↓
// User
//        ↓
// AttendanceController

// 16. MAILPIT
// Mục đích

// Không gửi mail thật.

// Luồng
// Mail::to()
//       ↓
// SMTP
//       ↓
// Mailpit
//       ↓
// Web UI
// File
// AttendanceApprovedMail.php
// Function
// Mail::to(...)
// Xem mail
// http://localhost:8025

// 17. HORIZON
// File
// config/horizon.php
// Luồng
// dispatch(Job)
//        ↓
// redis
//        ↓
// Horizon
//        ↓
// Worker
//        ↓
// handle()
// Command
// php artisan horizon
// Dashboard
// /horizon
// Theo dõi
// Pending Jobs

// Completed Jobs

// Failed Jobs

// Queues

// 18. SWAGGER
// File
// routes/api.php
// AttendanceController.php
// Luồng
// Controller Annotation
//          ↓
// Swagger Generate
//          ↓
// OpenAPI JSON
//          ↓
// Swagger UI
// Ví dụ
// /**
//  * @OA\Get(
//  * path="/api/v1/attendances"
//  * )
//  */
// Generate
// php artisan l5-swagger:generate
// Xem
// /api/documentation

// 19. DASHBOARD CHART

// Bạn đang dùng:

// Chart.js

// trong:

// Modules/Attendance/resources/views/index.blade.php
// Luồng
// Page Load
//       ↓
// AJAX
//       ↓
// /attendance/dashboard-advanced
//       ↓
// AttendanceController
//       ↓
// dashboardAdvanced()
//       ↓
// AttendanceDashboardService
//       ↓
// Database
//       ↓
// JSON
//       ↓
// Chart.js
// Function
// dashboardAdvanced()
// Ajax
// $.ajax({
//  url:
//  '/attendance/dashboard-advanced'
// })

// 20. PDF REPORT
// File
// AttendancePdfController.php
// View
// Modules/Attendance/resources/views/pdf/attendance.blade.php
// Route
// /attendance/export/pdf
// Luồng
// Click Export PDF
//        ↓
// attendance/export/pdf
//        ↓
// AttendancePdfController@pdf
//        ↓
// PDF::loadView()
//        ↓
// attendance.blade.php
//        ↓
// download()
// Function
// public function pdf()
// {
//     $pdf =
//     PDF::loadView(
//       'attendance::pdf.attendance'
//     );

//     return $pdf->download();
// }

// 21. PERMISSION

// Package:

// spatie/laravel-permission
// File
// routes/web.php
// Middleware
// permission:attendance.view
// Luồng
// Request
//       ↓
// Permission Middleware
//       ↓

// Has Permission ?

//       ↓

// YES
//       ↓
// Controller

// NO
//       ↓
// 403
// Ví dụ
// Route::get(
//  '/attendance'
// )
// ->middleware(
//  'permission:attendance.view'
// );
// User
// $user->givePermissionTo(
//     'attendance.view'
// );
