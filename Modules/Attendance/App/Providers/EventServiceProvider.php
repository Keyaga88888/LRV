<?php

namespace Modules\Attendance\App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Attendance\App\Events\AttendanceCreated;
use Modules\Attendance\App\Listeners\AttendanceLogListener;
use Modules\Attendance\App\Listeners\CalculateAttendanceSalary;
use Modules\Attendance\App\Listeners\SendAttendanceNotification;
use Modules\Attendance\App\Listeners\WriteAttendanceLog;
use Modules\Attendance\App\Models\Attendance;
use Modules\Attendance\App\Policies\AttendancePolicy;

class EventServiceProvider extends ServiceProvider
{
    // EventServiceProvider.php: Đăng ký >| Event > Listener | > AttendanceLogListener.php: Audit Log | Ghi lịch sử thao tác
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [

        AttendanceCreated::class => [

            AttendanceLogListener::class,

            CalculateAttendanceSalary::class,
            SendAttendanceNotification::class,

            WriteAttendanceLog::class,

        ],

    ];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
    protected function configureEmailVerification(): void {}

    public function boot(): void
    {
        parent::boot();

        // logger()->info('Attendance EventServiceProvider Loaded');
    }

    protected $policies = [

        Attendance::class => AttendancePolicy::class,

    ];
}
