<?php

// bỏ
// namespace Modules\Salary\App\Repositories;

// use Modules\Salary\App\Models\SalaryMechanism;

// /**
//  * REPOSITORY LAYER
//  * -----------------------------------------
//  * 📌 Tách logic DB ra khỏi Controller
//  *
//  * 👉 Controller không làm việc trực tiếp với Model
//  */
// class SalaryRepository
// {
//     /**
//      * Lấy danh sách salary (dùng cho DataTable)
//      */
//     public function query()
//     {
//         return SalaryMechanism::query()
//             ->with(['user.part', 'user.position']);
//     }

//     /**
//      * Tạo salary mới
//      */
//     public function create(array $data)
//     {
//         return SalaryMechanism::create($data);
//     }

//     /**
//      * Update salary
//      */
//     public function update($id, array $data)
//     {
//         $salary = SalaryMechanism::findOrFail($id);
//         $salary->update($data);
//         return $salary;
//     }

//     /**
//      * Xoá salary
//      */
//     public function delete($id)
//     {
//         return SalaryMechanism::destroy($id);
//     }
// }

// Service
//    ↓
// Repository
//    ↓
// Model
//    ↓
// Database

namespace Modules\Salary\App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Modules\Salary\App\Models\SalaryMechanism;

/**
 * ==========================================================
 * REPOSITORY
 * ==========================================================
 *
 * NHIỆM VỤ:
 * ----------------------------------------------------------
 * Toàn bộ thao tác DB.
 *
 * Service KHÔNG query DB.
 *
 * Controller KHÔNG query DB.
 *
 * Chỉ Repository được query DB.
 *
 *
 * FLOW:
 *
 * Controller
 *      ↓
 * Service
 *      ↓
 * Repository
 *      ↓
 * Model
 *      ↓
 * MySQL
 */
class SalaryRepository
{
    /**
     * ======================================================
     * DATATABLE QUERY
     * ======================================================
     *
     * dùng cho:
     *
     * SalaryService
     *      ↓
     * DataTable
     */
    public function getDataForTable(): Collection
    {
        return SalaryMechanism::with([
            'user.part',
            'user.position',
        ])->get();
    }

    /**
     * ======================================================
     * CREATE
     * ======================================================
     */
    public function create(array $data): SalaryMechanism
    {
        /**
         * create()
         * INSERT INTO
         * salary_mechanisms
         */
        return SalaryMechanism::create($data);
    }

    /**
     * ======================================================
     * UPDATE
     * ======================================================
     */
    public function update($id, array $data): SalaryMechanism
    {
        $salary = SalaryMechanism::findOrFail($id);

        $salary->update($data);

        return $salary;
    }

    /**
     * ======================================================
     * FIND
     * ======================================================
     */
    public function find($id)
    {
        return SalaryMechanism::findOrFail($id); // findOrFail() Nếu không có đi→ tự động throw 404
    }

    /**
     * ======================================================
     * DELETE
     * ======================================================
     */
    public function delete($id): bool
    {
        return SalaryMechanism::findOrFail($id)->delete(); // findOrFail() Nếu không có đi→ tự động throw 404
    }
}

// // cái này dùng
// namespace Modules\Salary\App\Repositories;

// use Modules\Salary\App\Models\SalaryMechanism;

// class SalaryRepository
// {
//     public function getDataForTable()
//     {
//         return SalaryMechanism::with(['user.part', 'user.position'])->get();
//     }

//     public function create(array $data)
//     {
//         return SalaryMechanism::create($data);
//     }

//     public function update($id, array $data)
//     {
//         return tap(SalaryMechanism::findOrFail($id))->update($data);
//     }
//     public function find($id)
//     {
//         return SalaryMechanism::findOrFail($id);
//     }
//     public function delete($id)
//     {
//         return SalaryMechanism::findOrFail($id)->delete();
//     }
// }

// bỏ

// use Illuminate\Support\Facades\Cache;
// use Modules\Salary\App\Models\SalaryMechanism;

// class SalaryRepository
// {
//     const CACHE_KEY = 'salary_datatable_v1';

//     public function getDataForTable()
//     {
//         return Cache::remember(self::CACHE_KEY, 3600, function () {

//             return SalaryMechanism::query()
//                 ->with(['user.part', 'user.position'])
//                 ->get();
//         });
//     }

//     public function create(array $data)
//     {
//         $model = SalaryMechanism::create($data);

//         Cache::forget(self::CACHE_KEY); // 🔥 invalidate cache

//         return $model;
//     }

//     public function update($id, array $data)
//     {
//         $model = SalaryMechanism::findOrFail($id);
//         $model->update($data);

//         Cache::forget(self::CACHE_KEY);

//         return $model;
//     }

//     public function delete($id)
//     {
//         $model = SalaryMechanism::findOrFail($id);
//         $model->delete();

//         Cache::forget(self::CACHE_KEY);
//     }
// }
