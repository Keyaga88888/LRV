<?php

// namespace Modules\Salary\App\Providers;

// use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

// /**
//  * EVENT MAPPING
//  * -----------------------------------------
//  * 📌 Nối Event ↔ Listener
//  */
// class EventServiceProvider extends ServiceProvider
// {
//     protected $listen = [
//         // Khi SalaryUpdated được gọi
//         // → chạy LogSalaryActivity
//         \Modules\Salary\App\Events\SalaryUpdated::class => [
//             \Modules\Salary\App\Listeners\LogSalaryActivity::class,
//         ],
//     ];

//     protected static $shouldDiscoverEvents = true;
//     /**
//      * Configure the proper event listeners for email verification.
//      */
//     protected function configureEmailVerification(): void {}
// }

namespace Modules\Salary\App\Providers;

/**
 * ==========================================================
 * EVENT SERVICE PROVIDER
 * ==========================================================
 *
 * 📌 Đây là nơi nối:
 *
 * Event
 *      ↓
 * Listener
 *
 *
 * ==========================================================
 * FLOW
 * ==========================================================
 *
 * event(
 *    new SalaryUpdated()
 * )
 *
 *      ↓
 *
 * Laravel nhìn vào:
 *
 * EventServiceProvider
 *
 *      ↓
 *
 * tìm Listener tương ứng
 *
 *      ↓
 *
 * LogSalaryActivity
 *
 *
 * ==========================================================
 * GIỐNG NHƯ
 * ==========================================================
 *
 * Event
 *      ↓
 *
 * "Ai nghe event này ?"
 *
 *      ↓
 *
 * Listener
 */

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Salary\App\Events\SalaryUpdated;
use Modules\Salary\App\Listeners\LogSalaryActivity;

class EventServiceProvider extends ServiceProvider
{
    /**
     * ======================================================
     * LISTEN MAP
     * ======================================================
     *
     * Event
     *      ↓
     * Listener
     */
    protected $listen = [

        /**
         * Khi SalaryUpdated được bắn
         *
         * Laravel sẽ gọi:
         *
         * LogSalaryActivity
         */
        SalaryUpdated::class => [

            LogSalaryActivity::class,

        ],

    ];

    /**
     * ======================================================
     * Auto Discover Event
     * ======================================================
     *
     * Laravel tự tìm Event + Listener
     */
    protected static $shouldDiscoverEvents = true;

    protected function configureEmailVerification(): void {}
}
