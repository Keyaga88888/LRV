<?php

namespace Modules\Attendance\App\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \Modules\Attendance\App\Models\Attendance
 */
class AttendanceResource extends JsonResource
{
    public function toArray(// cái này cho api data table xuất ra cái gì
        Request $request
    ): array {

        return [

            'id' => $this->id,

            'employee' => [

                'id' => $this->user?->id,

                'name' => $this->user?->name,

            ],

            'work_date' => $this->work_date,

            'check_in' => $this->check_in,

            'check_out' => $this->check_out,

            'late_minutes' => $this->late_minutes,

            'work_hours' => $this->work_hours,

            'overtime_hours' => $this->overtime_hours,

            'status' => $this->status,
            'created_at' => $this->created_at,

            'updated_at' => $this->updated_at,
        ];
    }
}
// php artisan module:make-resource AttendanceResource Attendance
