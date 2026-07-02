<?php

use Illuminate\Support\Facades\Route;
use Modules\Salary\App\Http\Controllers\SalaryController;

Route::prefix('salary')
    // ->middleware(['web', 'auth', 'check.salary'])
    ->middleware(['web', 'auth'])
    ->group(function () {

        /**
         * GET /salary
         * → mở UI index.blade.php
         */
        Route::get('/', [SalaryController::class, 'index'])
            ->middleware('permission:salary.view')
            ->name('salary.index');

        /**
         * GET /salary/data
         * → DataTable AJAX gọi vào đây
         */
        Route::get('/data', [SalaryController::class, 'data'])
            ->middleware('permission:salary.view') // qua bootstrap/app.php đăng ký
            ->name('salary.data');

        /**
         * POST /salary/store
         * → tạo salary
         */
        Route::post('/store', [SalaryController::class, 'store'])
            ->middleware('permission:salary.create') // qua bootstrap/app.php đăng ký
            ->name('salary.store');

        /**
         * POST /salary/update/{id}
         * → update salary
         */
        Route::post('/update/{id}', [SalaryController::class, 'update'])
            ->middleware('permission:salary.edit') // qua bootstrap/app.php đăng ký
            ->name('salary.update');

        /**
         * POST /salary/delete/{id}
         * → xoá salary
         */
        Route::post('/delete/{id}', [SalaryController::class, 'destroy'])
            ->middleware('permission:salary.delete') // qua bootstrap/app.php đăng ký
            ->name('salary.delete');

        /**
         * GET /salary/export
         * → xuất Excel
         */
        Route::get('/export', [SalaryController::class, 'export'])
            ->middleware('permission:salary.view') // qua bootstrap/app.php đăng ký
            ->name('salary.export');

    });
/**
 * Mở trang
 *   Browser → /salary → Controller@index → index.blade.php
 * Load bảng
 *   DataTable JS → /salary/data → Controller@data → JSON → Table render
 * Thêm lương
 *   Form AJAX → /salary/store → Controller@store → DB insert
 * Sửa lương
 *   Form AJAX → /salary/update/{id} → Controller@update → DB update
 * Xoá
 *   AJAX → /salary/delete/{id} → Controller@destroy → delete DB
 * Export Excel
 *   Click button → /salary/export → SalaryExport → download file
 */

// index.blade.php
//    ↓ load page
// DataTable JS chạy
//    ↓
// GET /salary/data → Controller@data → JSON
//    ↓
// render table

// CREATE FORM
//    ↓
// POST /salary/store → Controller@store

// EDIT FORM
//    ↓
// POST /salary/update/{id}

// DELETE
//    ↓
// POST /salary/delete/{id}

// Bạn đã có full kiến thức:

// Event Driven Architecture  |    SalaryUpdated  >   LogSalaryActivity
// Repository Pattern         |    SalaryRepository
// Service Layer              |    SalaryService
// DataTable Server-side      |    Yajra DataTables   Controller@data()
// AJAX CRUD                  | Create   Update   Delete
// Excel Export               |    SalaryExport         | composer require maatwebsite/excel
// Activity Log               |    Spatie Activity Log  | composer require spatie/laravel-activitylog
// UI hover chart realtime
// Middleware                 |    check.salary
// Validation                 |    StoreSalaryRequest
// Eloquent Relationship      |    user  part  position
// Eager Loading              |  with(['user.part','user.position'])
// Cache                      |  Cache::forget('salary_datatable');
// UI Hover Chart             |    Chart.js
// Frontend interaction       | jQuery + DataTable + SweetAlert
// ================================================================================
// BROWSER (Blade + JS)
//         ↓
// AJAX / FORM / CLICK
//         ↓
// Laravel Route (web.php)
//         ↓
// Controller (SalaryController)
//         ↓
// Service Layer (SalaryService)
//         ↓
// Repository Layer (SalaryRepository)
//         ↓
// Eloquent Model (SalaryMechanism)
//         ↓
// MySQL Database
//         ↓
// EVENT (SalaryUpdated)
//         ↓
// Listener (LogSalaryActivity)
//         ↓
// Spatie Activity Log DB
//         ↓
// Cache (Redis/File cache)
//         ↓
// Response JSON → DataTable / UI
// ================================================================================
// LOAD TABLE (DataTable Server-side)
//     1. UI
// DataTable JS load page
//     2. AJAX
// GET /salary/data
//     3. Controller
// SalaryController@data()
//     4. Service
// SalaryService::getDataTable()
//     5. Cache Layer
// Cache::remember('salary_datatable')
//     6. Repository
// SalaryRepository::getDataForTable()
//     7. DB Query
// SELECT * FROM salary_mechanisms
// JOIN users
// JOIN departments
//     8. Return JSON
// DataTable format:
// - data[]
// - recordsTotal
// - recordsFiltered
//     9. UI render
// DataTable populate HTML table
// ================================================================================
// CREATE SALARY (AJAX)
//    1. UI
// Modal form submit (#createForm)
//    2. JS
// POST /salary/store
//    3. Controller
// SalaryController@store
//    4. Service
// SalaryService@store()
//    5. Repo
// SalaryRepository@create()
//    6. DB
// INSERT INTO salary_mechanisms
//    7. Cache clear
// Cache::forget('salary_datatable')
//    8. Event fire
// event(new SalaryUpdated($salary))
//    9. Listener
// LogSalaryActivity
//    10. Spatie log
// activity('salary')->log('created')
//    11. Response
// JSON success → reload table

// ================================================================================
// UPDATE SALARY
//   FLOW:
// Click edit button
//    ↓
// Fill modal
//    ↓
// POST /salary/update/{id}
//    ↓
// Controller@update
//    ↓
// Service@update
//    ↓
// Repo@update
//    ↓
// DB UPDATE
//    ↓
// Cache forget
//    ↓
// Event SalaryUpdated
//    ↓
// Activity Log
//    ↓
// Return success
//    ↓
// DataTable reload

// ================================================================================
// DELETE SALARY (IMPORTANT)
//    FLOW:
// Click delete button
//    ↓
// SweetAlert confirm
//    ↓
// AJAX POST /salary/delete/{id}
//    ↓
// Controller@destroy
//    ↓
// Service@delete
//    ↓
// Repo@find(id)
//    ↓
// Repo@delete(id)
//    ↓
// DB DELETE
//    ↓
// Cache forget
//    ↓
// event(SalaryDeleted) ❗ (hoặc bạn đang dùng SalaryUpdated)
//    ↓
// Listener log
//    ↓
// Return JSON
//    ↓
// DataTable reload
// ================================================================================
// EXPORT EXCEL (Maatwebsite)
//   FLOW:
// Click "Xuất Excel"
//    ↓
// GET /salary/export
//    ↓
// Controller@export
//    ↓
// SalaryExport class
//    ↓
// Repository query data
//    ↓
// Collection transform
//    ↓
// Maatwebsite Excel
//    ↓
// Generate file .xlsx
//    ↓
// Download response
// ================================================================================
// INSIDE EXPORT CLASS
// SalaryMechanism::with('user')->get()
//         ↓
// map()
//         ↓
// format columns
//         ↓
// return collection
// ================================================================================
// EVENT DRIVEN (IMPORTANT CORE)
//    EVENT FLOW:
// store / update / delete
//         ↓
// SalaryUpdated event
//         ↓
// Listener: LogSalaryActivity
//         ↓
// Spatie Activity Log
//         ↓
// DB table: activity_log
// ================================================================================
// HOVER CHART (Chart.js)
//     FLOW:
// Hover employee name
//         ↓
// JS event mouseenter
//         ↓
// Check canvas dataset.loaded
//         ↓
// Chart.js init
//         ↓
// Render mini line chart
// ================================================================================
// PERMISSION MIDDLEWARE
// Route hit
//    ↓
// auth middleware
//    ↓
// permission:salary.delete
//    ↓
// Spatie Permission check
//    ↓
// Allow / Deny

// resources/views/salary/index.blade.php
//             │
//             │ AJAX
//             ▼
// SalaryController
//             │
//             ▼
// SalaryService
//             │
//             ▼
// SalaryRepository
//             │
//             ▼
// SalaryMechanism(Model)
//             │
//             ▼
// MySQL

// -----------------------------------

// Sau khi Create / Update

// SalaryService
//       │
//       ▼
// event(new SalaryUpdated())
//       │
//       ▼
// SalaryUpdated Event
//       │
//       ▼
// Queue (database)
//       │
//       ▼
// LogSalaryActivity Listener
//       │
//       ▼
// activity_log

// -----------------------------------
// CREATE

// index.blade.php
//       ↓
// AJAX
//       ↓
// SalaryController@store
//       ↓
// SalaryService@store
//       ↓
// SalaryRepository@create
//       ↓
// salary_mechanisms
//       ↓
// event(new SalaryUpdated())
//       ↓
// jobs table
//       ↓
// queue worker
//       ↓
// LogSalaryActivity
//       ↓
// activity_log
// -----------------------------------
// SalaryService . php
// file Business Logic Layer
// Controller
//     ↓
// Service
//     ↓
// Repository
//     ↓
// Model
//     ↓
// DB
// -----------------------------------
// LUỒNG STORE
// index.blade.php
// $('#createForm').submit()
//         ↓
// POST /salary/store
//         ↓
// web.php
// Route::post(
//     '/store'
// )
//         ↓
// SalaryController@store
//         ↓
// StoreSalaryRequest
//         ↓
// validate()
//         ↓
// SalaryService@store
//         ↓
// SalaryRepository@create
//         ↓
// SalaryMechanism::create()
//         ↓
// salary_mechanisms
//         ↓
// Cache::forget()
//         ↓
// event( new SalaryUpdated() )
// SalaryUpdated
//     ↓
// EventServiceProvider
//         ↓
// LogSalaryActivity
//         ↓
// jobs table (queue)
//         ↓
// queue worker
//         ↓
// activity_log
// -----------------------------------
// SalaryRepository.php
// Service
//    ↓
// Repository
//    ↓
// Model
//    ↓
// Database
// -----------------------------------
// UPDATE
// index.blade.php
//     ↓
// AJAX
//     ↓
// salary/update/{id}
//     ↓
// SalaryController@update
//     ↓
// UpdateSalaryRequest
//     ↓
// SalaryService@update
//     ↓
// SalaryRepository@find
//     ↓
// Model update()
//
// Cache::forget()
//     ↓
// event(
//    new SalaryUpdated()
// )
//     ↓
// EventServiceProvider
//     ↓
// LogSalaryActivity
//     ↓
// activity_log
// -----------------------------------
// DELETE
// index.blade.php
//     ↓
// AJAX
//     ↓
// salary/delete/{id}
//     ↓
// SalaryController@destroy
//     ↓
// SalaryService@delete
//     ↓
// SalaryRepository@delete
//     ↓
// salary_mechanisms
// -----------------------------------
// các file còn lại trong luồng hiện tại
// index.blade.php
//     ↓
// web.php
//     ↓
// SalaryController
//     ↓
// SalaryService
//     ↓
// SalaryRepository
//     ↓
// SalaryMechanism Model
//     ↓
// SalaryUpdated Event
//     ↓
// LogSalaryActivity Listener (Queue)
//     ↓
// database queue_jobs
//     ↓
// activity_log
