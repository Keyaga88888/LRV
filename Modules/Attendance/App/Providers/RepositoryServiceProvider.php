<?php

namespace Modules\Attendance\App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Attendance\App\Repositories\AttendanceRepository;
use Modules\Attendance\App\Repositories\AttendanceRepositoryInterface;
use Modules\Attendance\App\Services\AttendanceService;
use Modules\Attendance\App\Services\Contracts\AttendanceServiceInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            AttendanceRepositoryInterface::class,
            AttendanceRepository::class
        );
        $this->app->bind(
            AttendanceServiceInterface::class,
            AttendanceService::class
        );
    }
}
