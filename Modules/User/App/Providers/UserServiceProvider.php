<?php

// namespace Modules\User\App\Providers;

// // use App\Repositories\Interfaces\UserRepositoryInterface;
// // use App\Repositories\UserRepository;
// use Illuminate\Console\Scheduling\Schedule;
// use Modules\User\App\Repositories\Interfaces\UserRepositoryInterface;
// use Modules\User\App\Repositories\UserRepository;
// use Nwidart\Modules\Support\ModuleServiceProvider;
// use Override;

// class UserServiceProvider extends ModuleServiceProvider
// {
//     /**
//      * The name of the module.
//      */
//     protected string $name = 'User';

//     /**
//      * The lowercase version of the module name.
//      */
//     protected string $nameLower = 'user';

//     /**
//      * Command classes to register.
//      *
//      * @var string[]
//      */
//     // protected array $commands = [];

//     /**
//      * Provider classes to register.
//      *
//      * @var string[]
//      */
//     protected array $providers = [
//         EventServiceProvider::class,
//         RouteServiceProvider::class,

//     ];

//     /**
//      * Define module schedules.
//      *
//      * @param $schedule
//      */
//     // protected function configureSchedules(Schedule $schedule): void
//     // {
//     //     $schedule->command('inspire')->hourly();
//     // }
//     public function register(): void
//     {
//         $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
//     }
//     // public function boot(): void
//     // {
//     //     $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
//     //     $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');

//     //     $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

//     //     $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'user');
//     // }
// }

namespace Modules\User\App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\User\App\Repositories\Interfaces\UserRepositoryInterface;
use Modules\User\App\Repositories\UserRepository;

class UserServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'User';

    protected string $moduleNameLower = 'user';

    public function boot(): void
    {
        $this->loadRoutesFrom(module_path($this->moduleName, 'routes/web.php'));

        $this->loadViewsFrom(module_path($this->moduleName, 'resources/views'), $this->moduleNameLower);

        $this->loadMigrationsFrom(module_path($this->moduleName, 'database/migrations'));
    }

    public function register(): void
    {
        // khai báo mối quan hệ
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
