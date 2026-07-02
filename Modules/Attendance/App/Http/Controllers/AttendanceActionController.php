<?php

namespace Modules\Attendance\App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Modules\Attendance\App\Mail\AttendanceCheckInMail;
use Modules\Attendance\App\Mail\AttendanceCheckOutMail;
use Modules\Attendance\App\Models\Attendance;

class AttendanceActionController extends Controller
{
    public function checkIn()
    {
        $user = Auth::user();

        $attendance = Attendance::create([
            'user_id' => $user->id,
            'work_date' => now()->toDateString(),
            'check_in' => now(),
            'status' => 'present',
        ]);

        Mail::to($user->email)
            ->queue(
                new AttendanceCheckInMail($user)
            );

        return response()->json([
            'success' => true,
            'message' => 'Check in success',
        ]);
    }

    public function checkOut()
    {
        $user = Auth::user();

        $attendance =
            Attendance::where(
                'user_id',
                $user->id
            )
                ->whereDate(
                    'work_date',
                    today()
                )
                ->latest()
                ->first();

        if (! $attendance) {

            return response()->json([
                'success' => false,
                'message' => 'Attendance not found',
            ]);
        }

        $attendance->update([
            'check_out' => now(),
            'work_hours' => now()
                ->diffInHours(
                    $attendance->check_in
                ),
        ]);

        Mail::to(
            $user->email
        )->queue(
            new AttendanceCheckOutMail(
                $attendance
            )
        );

        return response()->json([
            'success' => true,
            'message' => 'Check out success',
        ]);
    }
}
// 1. CHECK IN FLOW
// Bấm nút Check In
// File:
// Modules/Attendance/resources/views/index.blade.php
// Function JS:
// $('#checkInBtn').click(function () {
//     $.post(
//         '/attendance/check-in',
//         ...
//     );
// });
// ↓
// Gọi Route
// File:
// Modules/Attendance/routes/web.php
// Route::post(
//     '/check-in',
//     [AttendanceActionController::class, 'checkIn']
// );
// ↓
// Chạy Function
// File:
// Modules/Attendance/App/Http/Controllers/AttendanceActionController.php
// public function checkIn()
// Nhiệm vụ:
// - lấy user hiện tại
// - tạo bản ghi attendance
// - gọi service xử lý nghiệp vụ
// ↓
// Gọi
// File
// Modules/Attendance/App/Services/AttendanceService.php
// Function:
// create()
// ↓
// Gọi
// File
// Modules/Attendance/App/Models/Attendance.php
// Function:
// Attendance::create()
// ↓
// Nếu có Observer
// File
// Modules/Attendance/App/Observers/AttendanceObserver.php
// Function:
// created(
// ↓
// Có thể gọi
// Notification::send()
// hoặc
// dispatch(
//     new SendAttendanceApprovedMailJob()
// );
// ↓
// Redis Queue
// ↓
// Worker
// php artisan queue:work
// ↓
// Job
// Modules/Attendance/App/Jobs/SendAttendanceApprovedMailJob.php
// Function:
// handle()
// ↓
// Mail
// Modules/Attendance/App/Mail/...
// ↓
// View Mail
// Modules/Attendance/resources/views/emails/check-in.blade.php

// 2. APPROVE FLOW
// Click Approve
// File:
// index.blade.php
// Function:
// $('.approveBtn').click(...)
// ↓
// Route
// Route::post(
//     '/approve/{attendance}',
//     [AttendanceApprovalController::class,'approve']
// );
// File:
// routes/web.php
// ↓
// Controller
// File:
// AttendanceApprovalController.php
// Function:
// approve()
// Nhiệm vụ:
// - tìm attendance
// - đổi approval_status
// - lưu DB
// ↓
// Model
// $attendance->update()
// ↓
// Observer
// updated()
// ↓
// Notification
// AttendanceApprovedNotification
// ↓
// Queue
// SendAttendanceApprovedMailJob.php
// ↓
// Mail
// AttendanceApprovedMail.php
// ↓
// View
// emails/attendance-approved.blade.php
