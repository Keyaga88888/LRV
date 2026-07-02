<?php

namespace Modules\Attendance\App\Jobs;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Modules\Attendance\App\Mail\AttendanceExportReady;
use Modules\Attendance\App\Models\Attendance;
use Modules\User\App\Models\User;

class ExportAttendancePdfJob implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public int $userId
    ) {}

    public function handle(): void
    {
        $records =
            Attendance::with('user')
                ->latest()
                ->get();

        $pdf = Pdf::loadView(
            'attendance::pdf.attendance',
            [
                'attendances' => $records,
            ]
        );

        $filename =
            'exports/attendance_'.
            now()->format('YmdHis').
            '.pdf';

        Storage::disk(
            'public'
        )->put(
            $filename,
            $pdf->output()
        );
        $user =
            User::findOrFail(
                $this->userId
            );

        Mail::to(
            $user->email
        )->send(
            new AttendanceExportReady(
                $filename
            )
        );
    }
}
