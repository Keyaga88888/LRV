<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Đây là đúng chuẩn Laravel 13 + Breeze. RegistrationTest  né lỗi ExampleTest.php , nếu đặt / cho layout mà không cần
Route::get('/dashboard', function () {
    // Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/swagger', function () {
        return redirect('/api/documentation');
    });
});

require __DIR__.'/auth.php';

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
//     Route::post('/update/{user}', [UserController::class, 'update'])->name('update');
//     Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('delete');
// })->middleware('auth');
