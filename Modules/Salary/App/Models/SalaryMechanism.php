<?php

// RELATIONSHIP
// SalaryMechanism
//       ↓
// user()
//       ↓
// User Model
//       ↓
// part()
//       ↓
// Part Model

// Accessor
// SalaryMechanism
//       ↓
// getTotalSalaryAttribute()
//       ↓
// $total_salary
//       ↓
// DataTable
// Excel
// Listener
// API
// Blade

namespace Modules\Salary\App\Models;

/**
 * ==========================================================
 * MODEL: SalaryMechanism
 * ==========================================================
 *
 * 📌 Đại diện bảng:
 *
 * salary_mechanisms
 *
 *
 * ==========================================================
 * MVC
 * ==========================================================
 *
 * Controller
 *      ↓
 *
 * Service
 *      ↓
 *
 * Repository
 *      ↓
 *
 * Model (FILE NÀY)
 *      ↓
 *
 * Database
 *
 *
 * ==========================================================
 * MODEL PHỤ TRÁCH
 * ==========================================================
 *
 * 1. Mapping table DB
 *
 * 2. CRUD Eloquent
 *
 * 3. Relationship
 *
 * 4. Accessor
 *
 * 5. Activity Log
 */

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\App\Models\User;
use Spatie\Activitylog\Models\Concerns\LogsActivity;
use Spatie\Activitylog\Support\LogOptions;

class SalaryMechanism extends Model
{
    /**
     * ======================================================
     * TRAITS
     * ======================================================
     *
     * HasFactory
     *
     * hỗ trợ factory test
     *
     *
     * LogsActivity
     *
     * package:
     *
     * spatie/activitylog
     */
    use HasFactory;

    use LogsActivity;

    /**
     * ======================================================
     * TABLE NAME
     * ======================================================
     *
     * mapping:
     *
     * salary_mechanisms
     */
    protected $table = 'salary_mechanisms';

    /**
     * ======================================================
     * MASS ASSIGNMENT
     * ======================================================
     *
     * cho phép:
     *
     * SalaryMechanism::create(...)
     *
     * SalaryMechanism::update(...)
     */
    protected $fillable = [
        'user_id',
        'basic_salary',
        'allowance',
        'bonus',
        'insurance_deduction',
        'tax_deduction',
        'overtime_salary',
        'late_penalty',
        'performance_score',
        'note',
        'salary_month',
    ];

    /**
     * ======================================================
     * ACTIVITY LOG
     * ======================================================
     *
     * package:
     *
     * spatie/laravel-activitylog
     *
     * activity_log table
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            /**
             * log tất cả field
             */
            ->logAll()
            /**
             * chỉ log field thay đổi
             */
            ->logOnlyDirty()
            /**
             * tên log
             */
            ->useLogName('salary')
            /**
             * mô tả event
             */
            ->setDescriptionForEvent(fn (string $event) => "Salary {$event}");
    }

    /**
     * ======================================================
     * AUTO LOG FIELD
     * ======================================================
     *
     * chỉ log 2 field này
     *
     * nếu dùng kiểu log cũ
     */
    protected static $logAttributes = [
        'basic_salary',
        'bonus',
    ];

    /**
     * tên nhóm log
     */
    protected static $logName = 'salary';

    /**
     * mô tả event
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return "Salary has been {$eventName}";
    }

    /**
     * ======================================================
     * RELATIONSHIP
     * ======================================================
     *
     * salary_mechanisms.user_id
     *      ↓
     * users.id
     *
     * belongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,
            'user_id'
        );
    }

    /**
     * ======================================================
     * ACCESSOR
     * ======================================================
     *
     * virtual field:
     *
     * total_salary
     *
     *
     * dùng:
     *
     * $salary->total_salary
     *
     * ở:
     *
     * Controller
     *
     * Export
     *
     * Listener
     *
     * API
     *
     * Blade
     */
    public function getTotalSalaryAttribute(): float
    {
        return
            ($this->basic_salary ?? 0)
            + ($this->allowance ?? 0)
            + ($this->bonus ?? 0)
            + ($this->overtime_salary ?? 0)
            - ($this->insurance_deduction ?? 0)
            - ($this->tax_deduction ?? 0)
            - ($this->late_penalty ?? 0);
    }
}
// namespace Modules\Salary\App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Models\Concerns\LogsActivity;
// use Spatie\Activitylog\Support\LogOptions;
// // use Spatie\Activitylog\Models\Concerns\LogsActivity;
// // use Spatie\Activitylog\Support\LogOptions;

// /**
//  * MODEL: SalaryMechanism
//  * -----------------------------------------
//  * 📌 Đại diện bảng: salary_mechanisms
//  *
//  * 👉 Vai trò:
//  * - Kết nối DB
//  * - define quan hệ user
//  * - define fillable
//  */
// class SalaryMechanism extends Model
// {
//     use HasFactory;
//     use LogsActivity;
//     public function getActivitylogOptions(): LogOptions
//     {
//         return LogOptions::defaults()
//             ->logAll()
//             ->logOnlyDirty()
//             ->useLogName('salary')
//             ->setDescriptionForEvent(fn(string $event) => "Salary {$event}");
//     }

//     /**
//      * Chỉ log 2 field này khi dùng Spatie auto log
//      */
//     protected static $logAttributes = ['basic_salary', 'bonus'];

//     protected static $logName = 'salary';

//     /**
//      * Giải thích event cho activity log
//      */
//     public function getDescriptionForEvent(string $eventName): string
//     {
//         return "Salary has been {$eventName}";
//     }

//     /**
//      * tên bảng DB
//      */
//     protected $table = 'salary_mechanisms';

//     /**
//      * các field được phép insert/update
//      */
//     protected $fillable = [
//         'user_id',
//         'basic_salary',
//         'allowance',
//         'bonus',
//         'insurance_deduction',
//         'tax_deduction',
//         'overtime_salary',
//         'late_penalty',
//         'performance_score',
//         'note',
//         'salary_month',
//     ];

//     /**
//      * RELATION:
//      * salary → belongsTo user
//      */
//     public function user()
//     {
//         return $this->belongsTo(
//             \Modules\User\App\Models\User::class,
//             'user_id'
//         );
//     }
//     public function getTotalSalaryAttribute()
//     {
//         return ($this->basic_salary ?? 0) +
//             ($this->allowance ?? 0) +
//             ($this->bonus ?? 0) +
//             ($this->overtime_salary ?? 0) -
//             ($this->insurance_deduction ?? 0) -
//             ($this->tax_deduction ?? 0) -
//             ($this->late_penalty ?? 0);
//     }
// }

// namespace Modules\Salary\App\Models;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

// /**
//  * =========================
//  * MODEL SALARY
//  * =========================
//  */
// class SalaryMechanism extends Model
// {
//     use HasFactory;

//     protected $table = 'salary_mechanisms';

//     protected $fillable = [
//         'user_id',
//         'basic_salary',
//         'allowance',
//         'bonus',
//         'overtime_salary',
//         'insurance_deduction',
//         'tax_deduction',
//         'late_penalty',
//         'performance_score',
//     ];

//     /**
//      * =========================
//      * RELATION USER
//      * =========================
//      */
//     public function user()
//     {
//         return $this->belongsTo(
//             \Modules\User\App\Models\User::class,
//             'user_id'
//         );
//     }

//     /**
//      * =========================
//      * ACCESSOR: TOTAL SALARY
//      * =========================
//      * 👉 dùng mọi nơi: Blade / API / Excel / DataTable
//      */
//     public function getTotalSalaryAttribute()
//     {
//         return
//             ($this->basic_salary ?? 0) +
//             ($this->allowance ?? 0) +
//             ($this->bonus ?? 0) +
//             ($this->overtime_salary ?? 0) -
//             ($this->insurance_deduction ?? 0) -
//             ($this->tax_deduction ?? 0) -
//             ($this->late_penalty ?? 0);
//     }
// }
