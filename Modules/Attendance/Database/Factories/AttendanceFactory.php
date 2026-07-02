<?php

namespace Modules\Attendance\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Attendance\App\Models\Attendance;
use Modules\User\App\Models\User;

class AttendanceFactory extends Factory
{
    protected $model =
        Attendance::class;

    public function definition()
    {
        return [

            'user_id' => User::factory(),

            'work_date' => now(),

            'check_in' => now(),

            'check_out' => now()->addHours(8),

            'late_minutes' => 0,

            'work_hours' => 8,

            'overtime_hours' => 0,

            'status' => 'present',
        ];
    }
}
