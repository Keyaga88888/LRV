<?php

namespace Modules\Attendance\App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Modules\Attendance\App\Exports\AttendanceExport;

class AttendanceExportController
{
    public function excel()
    {
        return Excel::download(
            new AttendanceExport,
            'attendance.xlsx'
        );
    }
}
