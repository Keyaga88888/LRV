<?php

// use Illuminate\Support\Facades\Route;
// use Modules\User\App\Http\Controllers\UserController;

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('users', UserController::class)->names('user');
// });
// Route::get('/account', [UserController::class, 'index'])->name('account')->middleware('auth');
// // cho nó vào hết trong group
// Route::prefix('users')->name('users.')->group(function () {
//     // giao diện blade
//     Route::get('/', [UserController::class, 'index'])->name('list');
//     // data json cho datatable
//     Route::get('/data', [UserController::class, 'getUsersData'])->name('list.data');
//     // datatable function getFilters > app/Http/Controllers/UserController.php
//     Route::get('/filters', [UserController::class, 'getFilters'])->name('filters');
//     Route::get('/create', [UserController::class, 'create'])->name('create');
//     Route::post('/create', [UserController::class, 'store'])->name('store');
//     // cái này của cái nút edit  |  {user}= $user - edit(User $user)
//     Route::get('/update/{user}', [UserController::class, 'edit'])->name('edit');
//     Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
//         Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('delete');
// })->middleware('auth');

use Illuminate\Support\Facades\Route;
// use Modules\Salary\App\Http\Controllers\SalaryController;
use Modules\User\App\Http\Controllers\UserController;

Route::middleware(['web', 'auth'])->prefix('users')->name('users.')->group(function () {

    Route::get('/', [UserController::class, 'index'])
        ->middleware('permission:user.view')
        ->name('list');

    Route::get('/data', [UserController::class, 'getUsersData'])
        ->name('list.data');

    Route::get('/filters', [UserController::class, 'getFilters'])
        ->name('filters');

    Route::get('/create', [UserController::class, 'create'])
        ->middleware('permission:user.create')
        ->name('create');

    Route::post('/create', [UserController::class, 'store'])
        ->middleware('permission:user.create')
        ->name('store');

    Route::get('/update/{user}', [UserController::class, 'edit'])
        ->middleware('permission:user.edit')
        ->name('edit');

    Route::post('/update/{user}', [UserController::class, 'update'])
        ->middleware('permission:user.edit')
        ->name('update');

    Route::delete('/delete/{user}', [UserController::class, 'destroy'])
        ->middleware('permission:user.delete')
        ->name('delete');

});
// // 🔐 SPATIE PERMISSION (gắn vào User module nhưng dùng trong Salary)
// Route::prefix('salary')
//     ->middleware(['check.salary'])
//     ->group(function () {

//         Route::get('/', [SalaryController::class, 'index'])
//             ->name('salary.index');

//         Route::get('/data', [SalaryController::class, 'data'])
//             ->name('salary.data');

//         Route::post('/store', [SalaryController::class, 'store'])
//             ->name('salary.store');

//         Route::post('/update/{id}', [SalaryController::class, 'update'])
//             ->name('salary.update');

//         Route::post('/delete/{id}', [SalaryController::class, 'destroy'])
//             ->name('salary.delete');
//     });
