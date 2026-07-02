<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Attendance\App\Models\Attendance;
use Modules\Attendance\App\Policies\AttendancePolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [

        Attendance::class => AttendancePolicy::class,

    ];

    public function boot(): void
    {
        //
    }
}
