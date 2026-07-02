<?php

namespace Modules\Salary\App\Providers;

use Illuminate\Console\Scheduling\Schedule;
use Modules\Salary\App\Repositories\SalaryRepository;
use Nwidart\Modules\Support\ModuleServiceProvider;

class SalaryServiceProvider extends ModuleServiceProvider
{
    /**
     * The name of the module.
     */
    protected string $name = 'Salary';

    /**
     * The lowercase version of the module name.
     */
    protected string $nameLower = 'salary';

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
    public function boot(): void
    {
        parent::boot();

        $this->app->register(
            EventServiceProvider::class
        );

        $this->app->register(
            RouteServiceProvider::class
        );
    }

    public function register(): void
    {
        $this->app->bind(SalaryRepository::class, function () {
            return new SalaryRepository;
        });
    }
}
