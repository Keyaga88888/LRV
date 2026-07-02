<?php

namespace App\Providers;

// use App\Repositories\Interfaces\UserRepositoryInterface;
// use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Modules\Attendance\App\Models\Attendance;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // copy di chuyển qua Modules mini
        // $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // cái này của Models\Attendance
        View::composer('*', function ($view) {

            $attendanceToday = Cache::remember(
                'attendance_today_count',
                now()->addMinutes(5),
                function () {

                    return Attendance::whereDate(
                        'work_date',
                        today()
                    )->count();
                }
            );

            $view->with(
                'attendanceToday',
                $attendanceToday
            );
        });
    }
}
