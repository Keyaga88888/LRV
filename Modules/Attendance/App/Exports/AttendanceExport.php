<?php

namespace Modules\Attendance\App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Modules\Attendance\App\Models\Attendance;

class AttendanceExport implements FromCollection
{
    public function collection()
    {
        return Attendance::with('user:id,name')
            ->select([
                'id',
                'user_id',
                'work_date',
                'check_in',
                'check_out',
                'late_minutes',
                'work_hours',
                'overtime_hours',
                'status',
            ])
            ->get()
            ->map(function ($item) {

                return [

                    'name' => $item->user->name ?? '',

                    'date' => $item->work_date,

                    'check_in' => $item->check_in,

                    'check_out' => $item->check_out,

                    'late' => $item->late_minutes,

                    'work' => $item->work_hours,

                    'ot' => $item->overtime_hours,

                    'status' => $item->status,
                ];
            });
    }
}
