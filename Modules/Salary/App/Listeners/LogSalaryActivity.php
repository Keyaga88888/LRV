<?php

// // SalaryUpdated.php >  SalaryUpdated.php ANNOTATE + QUEUE

namespace Modules\Salary\App\Listeners;

/**
 * ==========================================================
 * LISTENER: LogSalaryActivity
 * ==========================================================
 *
 * 📌 File này được EventServiceProvider gọi tới
 *
 * File gọi:
 * Modules/Salary/App/Providers/EventServiceProvider.php
 *
 * Mapping:
 *
 * SalaryUpdated
 *      ↓
 * LogSalaryActivity
 *
 *
 * ==========================================================
 * LUỒNG UPDATE SALARY
 * ==========================================================
 *
 * index.blade.php
 *      ↓ AJAX
 *
 * SalaryController@update()
 *      ↓
 *
 * SalaryService@update()
 *      ↓
 *
 * event(new SalaryUpdated())
 *      ↓
 *
 * EventServiceProvider
 *      ↓
 *
 * LogSalaryActivity (FILE NÀY)
 *      ↓
 *
 * activity_log table
 *
 *
 * ==========================================================
 * LUỒNG CREATE SALARY
 * ==========================================================
 *
 * Modal Create
 *      ↓
 *
 * SalaryController@store()
 *      ↓
 *
 * SalaryService@store()
 *      ↓
 *
 * event(new SalaryUpdated())
 *      ↓
 *
 * Listener này
 *      ↓
 *
 * activity_log
 *
 *
 * ==========================================================
 * QUEUE
 * ==========================================================
 *
 * implements ShouldQueue
 *
 * Laravel KHÔNG chạy ngay.
 *
 * Laravel sẽ:
 *
 * dispatch listener
 *      ↓
 *
 * jobs table
 *      ↓
 *
 * php artisan queue:work
 *      ↓
 *
 * handle()
 *
 * Ưu điểm:
 *
 * request trả về nhanh hơn
 * không block user
 */

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Modules\Salary\App\Events\SalaryUpdated;

class LogSalaryActivity implements ShouldQueue
{
    /**
     * ======================================================
     * Trait Queue
     * ======================================================
     *
     * Laravel cung cấp:
     *
     * delete()
     * release()
     * fail()
     *
     * cho listener queue
     */
    use InteractsWithQueue;

    /**
     * ======================================================
     * Queue Name
     * ======================================================
     *
     * jobs sẽ vào queue:
     *
     * salary
     *
     * chạy:
     *
     * php artisan queue:work --queue=salary
     */
    public $queue = 'salary';

    /**
     * ======================================================
     * HANDLE
     * ======================================================
     *
     * Laravel tự động gọi
     * khi queue worker xử lý job.
     *
     * Tham số:
     *
     * SalaryUpdated $event
     *
     * chính là object được truyền từ:
     *
     * event(
     *     new SalaryUpdated(...)
     * );
     */
    public function handle(SalaryUpdated $event): void
    {
        /**
         * ==================================================
         * Lấy model salary
         * ==================================================
         *
         * Nguồn:
         *
         * SalaryUpdated.php
         *
         * public $salary;
         */
        $salary = $event->salary;
        /**
         * ==================================================
         * Activity Log
         * ==================================================
         *
         * Package:
         *
         * spatie/laravel-activitylog
         *
         * Ghi log vào:
         *
         * activity_log
         */
        activity('salary')
            /**
             * causedBy()
             *
             * Ai là người thực hiện
             *
             * Auth::user()
             *
             * hoặc user của salary
             */
            ->causedBy(Auth::user() ?? $salary->user)
            /**
             * performedOn()
             *
             * Model bị tác động
             *
             * salary_mechanisms
             */
            ->performedOn($salary)
            /**
             * withProperties()
             *
             * lưu dữ liệu json
             *
             * activity_log.properties
             */
            ->withProperties([
                'salary_id' => $salary->id,
                'user_id' => $salary->user_id,
                'total' => $salary->total_salary ?? 0,
            ])
            /**
             * event()
             *
             * create
             * update
             * delete
             */
            ->event($event->action)
            /**
             * log()
             *
             * nội dung log
             */
            ->log("Salary {$event->action}");
        /**
         * ==================================================
         * File Log
         * ==================================================
         *
         * storage/logs/laravel.log
         *
         * giúp debug queue
         */
        Log::info('Salary Activity Logged',
            [
                'salary_id' => $salary->id,
                'action' => $event->action,
            ]
        );
    }

    /**
     * ======================================================
     * FAILED
     * ======================================================
     *
     * Laravel tự gọi khi:
     *
     * handle()
     * throw Exception
     *
     * hoặc queue fail
     *
     * dữ liệu sẽ ghi:
     *
     * laravel.log
     */
    public function failed(
        SalaryUpdated $event,
        \Throwable $exception
    ): void {
        Log::error(
            'Salary Listener Failed',
            [
                'salary_id' => $event->salary?->id,
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
            ]
        );
    }
}
// jobs         -> có job được đẩy vào
// queue worker -> xử lý
// jobs         -> bị xoá
// failed_jobs  -> không có gì

// Salary Updated
//       ↓
// Event
//       ↓
// Queue Job (Listener Queue)
//       ↓
// jobs table
//       ↓
// queue:work
//       ↓
// LogSalaryActivity
//       ↓
// activity_log

// namespace Modules\Salary\App\Listeners;

// use Modules\Salary\App\Events\SalaryUpdated;
// use Illuminate\Support\Facades\Auth;

// class LogSalaryActivity
// {
//     public function handle(SalaryUpdated $event)
//     {
//         $salary = $event->salary;

//         activity('salary')
//             ->causedBy(Auth::user() ?? $salary->user)
//             ->performedOn($salary)
//             ->withProperties([
//                 'salary_id' => $salary->id,
//                 'user_id' => $salary->user_id,
//                 'total' => $salary->total_salary ?? 0,
//             ])
//             ->event($event->action)
//             ->log("Salary {$event->action}");
//             // ->event('updated')
//             // ->log('Salary updated');
//     }
// }
// View (Edit button)
//    ↓ ajax update
// Controller update()
//    ↓
// Service update()
//    ↓
// event(SalaryUpdated)
//    ↓
// Listener LogSalaryActivity
//    ↓
// activity_log table

// namespace Modules\Salary\App\Listeners;

// // use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Support\Facades\Log;
// use Modules\Salary\App\Events\SalaryUpdated;
// use Modules\Salary\App\Events\SalaryUpdatedBroadcast;

// /**
//  * =========================
//  * LISTENER (GOD MODE)
//  * =========================
//  * 📌 chạy queue background
//  * 👉 không làm chậm request
//  */
// // class LogSalaryActivity implements ShouldQueue
// class LogSalaryActivity
// {
//     public function handle(SalaryUpdated $event)
//     {
//         $salary = $event->salary;

//         /**
//          * =========================
//          * ACTIVITY LOG
//          * =========================
//          */
//         activity()
//             ->causedBy($salary->user)
//             ->withProperties([
//                 'salary_id' => $salary->id,
//                 'user_id'   => $salary->user_id,
//                 'total'     => $salary->total_salary ?? 0
//             ])
//             ->log('Salary updated');

//         /**
//          * =========================
//          * LOG FILE
//          * =========================
//          */
//         Log::info('Salary updated', [
//             'id' => $salary->id
//         ]);

//         /**
//          * =========================
//          * BROADCAST (ĐÚNG CÁCH)
//          * =========================
//          */
//         broadcast(new SalaryUpdatedBroadcast($salary->id));
//     }
// }
