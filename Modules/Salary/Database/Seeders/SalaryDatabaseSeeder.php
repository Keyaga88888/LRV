<?php

namespace Modules\Salary\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Salary\App\Models\SalaryMechanism;
use Modules\User\App\Models\User;

class SalaryDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {

            SalaryMechanism::create([

                'user_id' => $user->id,

                'basic_salary' => rand(10000000, 30000000),

                'allowance' => rand(1000000, 5000000),

                'bonus' => rand(1000000, 3000000),

                'insurance_deduction' => rand(500000, 1500000),

                'tax_deduction' => rand(500000, 2000000),

                'overtime_salary' => rand(1000000, 4000000),

                'late_penalty' => rand(0, 500000),

                'performance_score' => rand(60, 100),

                'salary_month' => now(),

                'note' => fake()->sentence(),
            ]);
        }
    }
}
// php artisan module:seed Salary
