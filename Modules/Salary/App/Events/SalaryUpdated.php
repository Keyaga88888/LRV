<?php

namespace Modules\Salary\App\Events;

// use Modules\Salary\App\Models\SalaryMechanism;

use Illuminate\Queue\SerializesModels;

// SalaryService.php >  SalaryUpdated.php  ANNOTATE

/**
 * ==========================================================
 * EVENT: SalaryUpdated
 * ==========================================================
 *
 * NHIỆM VỤ:
 * ----------------------------------------------------------
 * Event chỉ dùng để PHÁT TÍN HIỆU.
 *
 * Nó KHÔNG xử lý nghiệp vụ.
 *
 * Ví dụ:
 *
 * Service
 *    ↓
 * event(new SalaryUpdated())
 *    ↓
 * Listener nhận tín hiệu
 *    ↓
 * xử lý log / mail / queue / websocket
 *
 *
 * FILE GỌI TỚI:
 * ----------------------------------------------------------
 * Modules/Salary/App/Services/SalaryService.php
 *
 *
 * FILE NHẬN EVENT:
 * ----------------------------------------------------------
 * Modules/Salary/App/Listeners/LogSalaryActivity.php
 *
 *
 * FLOW:
 * ----------------------------------------------------------
 * SalaryService
 *      ↓
 * SalaryUpdated Event
 *      ↓
 * Queue
 *      ↓
 * LogSalaryActivity Listener
 */
class SalaryUpdated
{
    use SerializesModels;

    /**
     * salary object
     *
     * ví dụ:
     * SalaryMechanism model
     */
    public $salary;

    /**
     * action hiện tại:
     *
     * created
     * updated
     * deleted
     */
    public $action;

    /**
     * constructor chạy khi:
     *
     * event(new SalaryUpdated(...))
     *
     * được gọi.
     */
    public function __construct(
        $salary,
        $action = 'updated'
    ) {

        /**
         * fresh()
         *
         * reload dữ liệu mới nhất từ DB
         *
         * tránh lỗi queue lấy dữ liệu cũ
         */
        $this->salary = $salary->fresh(['user']);

        $this->action = $action;
    }
}

// // backend logic event (PHP internal)
// namespace Modules\Salary\App\Events;

// use Illuminate\Queue\SerializesModels;
// use Modules\Salary\App\Models\SalaryMechanism;

// /**
//  * =========================
//  * EVENT: SalaryUpdated
//  * =========================
//  * 📌 Bắn ra khi:
//  * - create salary
//  * - update salary
//  * - delete salary (optional)
//  *
//  * 👉 FLOW:
//  * Service → Dispatch Job → Repository → Event → Listener
//  */
// class SalaryUpdated
// {
//     use SerializesModels;

//     /**
//      * Dữ liệu salary được truyền sang Listener
//      */
//     public function __construct(
//         public SalaryMechanism $salary
//     ) {}
// }
