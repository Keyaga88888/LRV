<?php

namespace Modules\Attendance\App\Providers;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\View;
use Modules\Attendance\App\Console\AttendanceSummaryCommand;
use Modules\Attendance\App\Models\Attendance;
use Modules\Attendance\App\Observers\AttendanceObserver;
use Nwidart\Modules\Support\ModuleServiceProvider;

class AttendanceServiceProvider extends ModuleServiceProvider
{
    /**
     * The name of the module.
     */
    protected string $name = 'Attendance';

    /**
     * The lowercase version of the module name.
     */
    protected string $nameLower = 'attendance';

    /**
     * Command classes to register.
     *
     * @var string[]
     */
    // protected array $commands = [];

    /**
     * Provider classes to register.
     *
     * @var string[]
     */
    protected array $providers = [
        EventServiceProvider::class,
        RouteServiceProvider::class,
        RepositoryServiceProvider::class,

    ];

    /**
     * Define module schedules.
     *
     * @param  $schedule
     */
    // protected function configureSchedules(Schedule $schedule): void
    // {
    //     $schedule->command('inspire')->hourly();
    // }
    protected array $commands = [
        AttendanceSummaryCommand::class,
    ];

    public function boot(): void
    {
        $this->loadViewsFrom(
            module_path('Attendance', 'resources/views'),
            'attendance'
        );
        $this->loadRoutesFrom(
            module_path(
                'Attendance',
                'routes/web.php'
            )
        );

        $this->loadRoutesFrom(
            module_path(
                'Attendance',
                'routes/api.php'
            )
        );

        $this->loadRoutesFrom(
            module_path(
                'Attendance',
                'routes/console.php'
            )
        );
        $this->commands([
            AttendanceSummaryCommand::class,
        ]);

        $this->app->booted(function () {
            $schedule = app(Schedule::class);

            $schedule->command('attendance:summary')
                ->dailyAt('23:59');
        });
        Attendance::observe(AttendanceObserver::class);
        // 👇 FIX VIEW NAMESPACE
        View::addNamespace(
            'attendance',
            base_path('Modules/Attendance/resources/views')
        );
    }
}
