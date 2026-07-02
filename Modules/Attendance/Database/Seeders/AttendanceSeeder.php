<?php

namespace Modules\Attendance\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Modules\Attendance\App\Models\Attendance;
use Modules\User\App\Models\User;

class AttendanceSeeder extends Seeder
{
    public function run(): void
    {
        Attendance::truncate();

        $users = User::all();

        foreach ($users as $user) {

            for ($i = 1; $i <= 30; $i++) {

                $date = Carbon::now()
                    ->subDays($i);

                $checkIn = Carbon::parse(
                    $date->format('Y-m-d').' 08:'.rand(0, 40).':00'
                );

                $checkOut = Carbon::parse(
                    $date->format('Y-m-d').' 17:'.rand(0, 59).':00'
                );

                $lateMinutes = max(
                    0,
                    Carbon::parse(
                        $date->format('Y-m-d').' 08:00:00'
                    )->diffInMinutes(
                        $checkIn,
                        false
                    ) * -1
                );

                $workHours = round(
                    $checkIn->diffInMinutes($checkOut) / 60,
                    2
                );

                $overtimeHours = max(
                    0,
                    round($workHours - 8, 2)
                );

                $statuses = [
                    'present',
                    'late',
                    'absent',
                    'leave',
                ];

                $status = $statuses[array_rand($statuses)];

                if ($status === 'absent') {

                    $checkIn = null;
                    $checkOut = null;
                    $lateMinutes = 0;
                    $workHours = 0;
                    $overtimeHours = 0;
                }

                Attendance::create([

                    'user_id' => $user->id,
                    'work_date' => $date,
                    'check_in' => $checkIn,
                    'check_out' => $checkOut,
                    'late_minutes' => $lateMinutes,
                    'work_hours' => $workHours,
                    'overtime_hours' => $overtimeHours,
                    'status' => $status,

                ]);
            }
        }
    }
}
// php artisan tinker
// xoá
// Modules\Attendance\App\Models\Attendance::truncate();
// tạo
// php artisan db:seed --class="Modules\Attendance\Database\Seeders\AttendanceSeeder"
