<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class AttendancePermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::firstOrCreate([
            'name' => 'attendance.view',
        ]);

        Permission::firstOrCreate([
            'name' => 'attendance.create',
        ]);

        Permission::firstOrCreate([
            'name' => 'attendance.edit',
        ]);

        Permission::firstOrCreate([
            'name' => 'attendance.delete',
        ]);
    }
}
// chạy: php artisan db:seed --class=AttendancePermissionSeeder
// php artisan tinker
// use Spatie\Permission\Models\Role;
// $admin = Role::findByName('admin');
// $admin->givePermissionTo([
//     'attendance.view',
//     'attendance.create',
//     'attendance.edit',
//     'attendance.delete'
// ]);
// DB::table('role_has_permissions')->get();
// php artisan permission:cache-reset
