<?php

namespace Modules\Attendance\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AttendanceSeeder::class,
        ]);
    }
}
// Nhiệm vụ : Seeder tổng.
// Khai báo : $this->call()
// Luồng : db:seed > DatabaseSeeder > AttendanceSeeder
