<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Company\App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::create([

            'name' => 'Main Company',

            'code' => 'MAIN',

            'phone' => '0123456789',

            'email' => 'admin@company.com',

            'address' => 'Ho Chi Minh',

            'status' => 1,

        ]);
    }
}
