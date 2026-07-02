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
| Attendance API
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
