<?php

// Controller
//     ↓
// Service
//     ↓
// Repository
//     ↓
// Model
//     ↓
// DB

namespace Modules\Salary\App\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Salary\App\Events\SalaryUpdated;
use Modules\Salary\App\Models\SalaryMechanism;
use Modules\Salary\App\Repositories\SalaryRepository;

/**
 * ==========================================================
 * SERVICE LAYER
 * ==========================================================
 *
 * NHIỆM VỤ:
 * ----------------------------------------------------------
 * Chứa Business Logic.
 *
 * Controller KHÔNG làm việc trực tiếp với DB.
 *
 * Controller
 *      ↓
 * Service
 *      ↓
 * Repository
 *      ↓
 * Database
 *
 *
 * TẠI SAO CẦN SERVICE ?
 * ----------------------------------------------------------
 * Nếu mai:
 *
 * - gửi mail
 * - queue
 * - websocket
 * - cache
 * - AI
 * - audit log
 *
 * Controller không cần sửa.
 */
class SalaryService
{
    /**
     * Dependency Injection
     *
     * Laravel tự inject Repository.
     */
    public function __construct(
        protected SalaryRepository $repo
    ) {}

    /**
     * ======================================================
     * DATATABLE CACHE
     * ======================================================
     *
     * Controller gọi:
     *
     * SalaryService
     *      ↓
     * getDataTable()
     *      ↓
     * Cache
     *      ↓
     * Repository
     */
    public function getDataTable()
    {
        return Cache::remember('salary_datatable', 60, function () {
            /**
             * nếu cache chưa có
             * thì query DB
             */
            return $this->repo->getDataForTable();
        }
        );
    }

    /**
     * ======================================================
     * STORE
     * ======================================================
     *
     * NHẬN TỪ:
     *
     * SalaryController@store
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
     * DB
     *      ↓
     * Clear Cache
     *      ↓
     * Event
     *      ↓
     * Queue
     *      ↓
     * Listener
     */
    public function store(array $data)
    {
        /**
         * insert database
         */
        $salary = $this->repo->create($data);
        /**
         * clear cache
         *
         * lần sau DataTable
         * sẽ query lại DB
         */
        Cache::forget('salary_datatable');
        Cache::forget('salary_datatable_v1');
        /**
         * phát event
         *
         * listener sẽ nhận
         */
        event(new SalaryUpdated($salary, 'created'));

        return $salary;
    }

    /**
     * ======================================================
     * UPDATE
     * ======================================================
     */
    public function update($id, array $data)
    {
        /**
         * tìm record
         */
        $salary = $this->repo->find($id);
        /**
         * update DB
         */
        $salary->update($data);
        /**
         * reload model
         */
        $salary->refresh();
        /**
         * clear cache
         */
        Cache::forget('salary_datatable');
        Cache::forget('salary_datatable_v1');
        /**
         * phát event
         */
        event(new SalaryUpdated($salary, 'updated'));

        return $salary;
    }

    /**
     * ======================================================
     * FIND
     * ======================================================
     */
    public function find($id)
    {
        return SalaryMechanism::findOrFail($id);
    }

    /**
     * ======================================================
     * DELETE
     * ======================================================
     */
    public function delete($id)
    {
        /**
         * lấy object trước
         * khi xoá
         */
        $salary = $this->repo->find($id);
        /**
         * event delete
         */
        event(new SalaryUpdated($salary, 'deleted'));
        /**
         * xoá DB
         */
        $this->repo->delete($id);
        /**
         * clear cache
         */
        Cache::forget('salary_datatable');
        Cache::forget('salary_datatable_v1');

        return true;
    }
}

// namespace Modules\Salary\App\Services;

// use Illuminate\Support\Facades\Cache;
// use Modules\Salary\App\Events\SalaryUpdated;
// use Modules\Salary\App\Models\SalaryMechanism;
// use Modules\Salary\App\Repositories\SalaryRepository;

// class SalaryService
// {
//     public function __construct(
//         protected SalaryRepository $repo
//     ) {}

//     public function getDataTable()
//     {
//         return Cache::remember('salary_datatable', 60, function () {
//             return $this->repo->getDataForTable();
//         });
//     }

//     public function store(array $data)
//     {
//         $salary = $this->repo->create($data);
//         Cache::forget('salary_datatable');

//         Cache::forget('salary_datatable_v1');

//         // event(new SalaryUpdated($salary)); // 👈 PHẢI CÓ
//         event(new SalaryUpdated($salary, 'created')); // queue/job

//         return $salary;
//     }
//     public function update($id, array $data)
//     {
//         $salary = $this->repo->find($id);
//         $salary->update($data);
//         $salary->refresh(); // queue/job

//         Cache::forget('salary_datatable');

//         Cache::forget('salary_datatable_v1');

//         // event(new SalaryUpdated($salary)); // <<< BẮT BUỘC CÓ DÒNG NÀY
//         event(new SalaryUpdated($salary, 'updated')); // queue/job

//         return $salary;
//     }
//     public function find($id)
//     {
//         return SalaryMechanism::findOrFail($id);
//     }
//     public function delete($id)
//     {
//         $salary = $this->repo->find($id);

//         event(new SalaryUpdated($salary, 'deleted'));

//         $this->repo->delete($id);

//         Cache::forget('salary_datatable');
//         Cache::forget('salary_datatable_v1');

//         return true;
//     //     $salary = $this->repo->find($id); // thêm hàm find

//     //     $this->repo->delete($id);

//     //     Cache::forget('salary_datatable');
//     //     Cache::forget('salary_datatable_v1');

//     // // event(new SalaryDeleted($salary)); // ✔ đúng

//     //     return true;
//     }
// }

// namespace Modules\Salary\App\Services;

// use Illuminate\Support\Facades\Cache;
// use Modules\Salary\App\Events\SalaryUpdated;
// use Modules\Salary\App\Jobs\ProcessSalaryJob;
// use Modules\Salary\App\Repositories\SalaryRepository;

// /**
//  * SERVICE LAYER
//  * -----------------------------------------
//  * 📌 Xử lý business logic chính:
//  * - cache
//  * - event
//  * - workflow
//  */
// class SalaryService
// {
//     protected $repo;

//     public function __construct(SalaryRepository $repo)
//     {
//         $this->repo = $repo;
//     }

//     /**
//      * CREATE SALARY
//      */
//     public function store(array $data)
//     {
//         // debug test
//         // dd('service hit', $data);

//         // return $this->repo->create($data);
//         // dd('SERVICE HIT', $data);
//         // dd($data);

//         //tạo DB
//         $salary = $this->repo->create($data);
//         //xoá cache datatable
//         Cache::forget('salary_datatable');
//         // bắn event -> Listener log
//         event(new SalaryUpdated($salary));
//         return $salary;

//         // ProcessSalaryJob::dispatch(
//         //     'create',
//         //     null,
//         //     $data
//         // );
//     }// php artisan queue:work

//     /**
//      * UPDATE SALARY
//      */
//     public function update($id, array $data)
//     {
//         $salary = $this->repo->update($id, $data);

//         Cache::forget('salary_datatable');

//         event(new SalaryUpdated($salary));

//         return $salary;
//     }

//     /**
//      * DELETE SALARY
//      */
//     public function delete($id)
//     {
//         $this->repo->delete($id);

//         Cache::forget('salary_datatable');
//     }
// }

// bỏ
// namespace Modules\Salary\App\Services;

// use Modules\Salary\App\Repositories\SalaryRepository;
// use Modules\Salary\App\Jobs\ProcessSalaryJob;
// use Illuminate\Support\Facades\Cache;

// /**
//  * =========================
//  * SERVICE LAYER
//  * =========================
//  */
// class SalaryService
// {
//     public function __construct(
//         protected SalaryRepository $repo
//     ) {}

//     /**
//      * CREATE
//      */
//     public function store(array $data)
//     {
//         ProcessSalaryJob::dispatch('create', null, $data);
//         return true;
//     }

//     /**
//      * UPDATE
//      */
//     public function update($id, array $data)
//     {
//         ProcessSalaryJob::dispatch('update', $id, $data);
//         return true;
//     }

//     /**
//      * DELETE
//      */
//     public function delete($id)
//     {
//         ProcessSalaryJob::dispatch('delete', $id);
//         return true;
//     }

//     /**
//      * CACHE DATA TABLE
//      */
//     public function getCachedData()
//     {
//         return Cache::remember('salary_table', 60, function () {
//             return $this->repo->query()->get();
//         });
//     }
// }
