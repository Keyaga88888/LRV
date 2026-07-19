<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\User\App\Models\User;

class UserDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([

            'company_id' => 1,

            'name' => 'Administrator',

            'email' => 'admin@gmail.com',

            'password' => Hash::make('12345678'),

        ]);
    }
}
