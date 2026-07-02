<?php

namespace Modules\Attendance\App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Modules\Attendance\App\Models\Attendance;

class AttendancePdfController
{
    public function pdf()
    {
        try {
            $attendances =
                Attendance::with('user')
                    ->latest()
                    ->limit(100)
                    ->get();

            logger()->info(
                'PDF COUNT',
                ['count' => $attendances->count()]
            );

            $pdf = Pdf::loadView(
                'attendance::pdf.attendance',
                compact('attendances')
            );

            return $pdf->download(
                'attendance.pdf'
            );
        } catch (\Throwable $e) {

            logger()->error(
                'PDF ERROR',
                [
                    'message' => $e->getMessage(),
                    'line' => $e->getLine(),
                    'file' => $e->getFile(),
                ]
            );

            dd($e->getMessage());
        }
    }
}
// Modules / Attendance / App / Http / Controllers / AttendancePdfController . php
//  v
// Modules/Attendance/resources/views/pdf/attendance.blade.php
