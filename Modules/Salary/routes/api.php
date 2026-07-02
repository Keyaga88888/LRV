<?php

use Illuminate\Support\Facades\Route;
use Modules\Salary\App\Http\Controllers\SalaryController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('salaries', SalaryController::class)->names('salary');
});
