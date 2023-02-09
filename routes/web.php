<?php

use App\Http\Middleware\Clearcpf;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['serverError'])->group(function () {
    Route::get('/', function () {
        return redirect('/employees');
    });

    Route::resource('/employees', EmployeeController::class)
        ->only(['index', 'create', 'store', 'destroy', 'edit']);
});

Route::post('/employees/store', [EmployeeController::class, 'store'])
    ->name('employees.store')
    ->middleware(Clearcpf::class);