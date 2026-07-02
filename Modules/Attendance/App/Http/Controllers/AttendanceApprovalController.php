<?php

namespace Modules\Attendance\App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Attendance\App\Events\AttendanceApproved;
use Modules\Attendance\App\Jobs\SendAttendanceApprovedMailJob;
use Modules\Attendance\App\Models\Attendance;

class AttendanceApprovalController extends Controller
{
    public function approve(
        Attendance $attendance
    ) {
        $attendance->update([

            'approval_status' => 'approved',

            'approved_at' => now(),

            'approved_by' => Auth::id(),

        ]);
        // event realtime
        event(
            new AttendanceApproved(
                $attendance
            )
        );
        SendAttendanceApprovedMailJob::dispatch(
            $attendance->user
        );

        return response()->json([
            'message' => 'approved',
        ]);
    }

    public function reject(
        Attendance $attendance
    ) {

        // logger()->info(
        //     'REJECT',
        //     [
        //         'id' => $attendance->id
        //     ]
        // );
        logger()->info(
            'BEFORE',
            $attendance->toArray()
        );

        $attendance->update([
            'approval_status' => 'rejected',
            'approved_at' => now(),
            'approved_by' => Auth::id(),
        ]);
        event(new AttendanceApproved($attendance));
        logger()->info(
            'AFTER UPDATE',
            $attendance->fresh()->toArray()
        );

        return response()->json([
            'message' => 'rejected',
        ]);
    }
}
/*
|--------------------------------------------------------------------------
| APPROVE FLOW + NOTIFICATION + QUEUE + WEBSOCKET
|--------------------------------------------------------------------------
|
| index.blade.php
|
| FUNCTION:
| $('.approveBtn').click()
|
| ↓
|
| POST:
| /attendance/approve/{attendance}
|
| ↓
|
| Modules/Attendance/routes/web.php
|
| Route::post(
|     '/approve/{attendance}'
| )
|
| ↓
|
| Modules/Attendance/App/Http/Controllers/
| AttendanceApprovalController.php
|
| FUNCTION:
| approve()
|
| ↓
|
| Modules/Attendance/App/Models/
| Attendance.php
|
| FUNCTION:
| update()
|
| FIELD:
| approval_status = approved
|
| ↓
|
| event(
|     new AttendanceApproved(
|         $attendance
|     )
| )
|
| ↓
|
| app/Events/
| AttendanceApproved.php
|
| FUNCTION:
| __construct($attendance)
|
| ↓
|
| FUNCTION:
| broadcastOn()
|
| CHANNEL:
| attendance
|
| ↓
|=========================
| REALTIME FLOW (REVERB)
|=========================
|
| Laravel Reverb
|
| COMMAND:
| php artisan reverb:start
|
| ↓
|
| resources/js/bootstrap.js
|
| FUNCTION:
| Echo.channel(
|     'attendance'
| )
|
| ↓
|
| index.blade.php
|
| FUNCTION:
| .listen(
|     'AttendanceApproved'
| )
|
| ↓
|
| Swal.fire()
|
| ↓
|
| Browser realtime update
|
|=========================
| NOTIFICATION FLOW
|=========================
|
| AttendanceObserver.php
|
| FUNCTION:
| updated()
|
| ↓
|
| AttendanceApprovedNotification.php
|
| FUNCTION:
| toMail()
|
| ↓
|
| SendAttendanceApprovedMailJob.php
|
| FUNCTION:
| handle()
|
| ↓ dispatch()
|
| Redis Queue
|
| DRIVER:
| QUEUE_CONNECTION=redis
|
| ↓
|
| Horizon
| hoặc
| php artisan queue:work
|
| ↓
|
| attendance-approved.blade.php
|
| ↓
|
| Mailpit
|
| http://localhost:8025
|
*/
