<?php

use App\Http\Middleware\Clearcpf;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['serverError'])->group(function () {
    Route::get(
        '/',
        function () {
            return redirect('/employees');
        }
    );

    Route::resource('/employees', EmployeeController::class)
        ->only(['index', 'create', 'store', 'destroy', 'edit']);

    Route::post('/employees/store', [EmployeeController::class, 'store'])
        ->name('employees.store')
        ->middleware(Clearcpf::class);

    Route::get('/employees/edit/{employee}', [EmployeeController::class, 'edit'])
        ->name('employees.edit');

    Route::put('/employees/update/{employee}', [EmployeeController::class, 'update'])
        ->name('employees.update');

    Route::get('/employees/remove/{deleteEmployee}', [EmployeeController::class, 'remove'])
        ->name('employees.remove');

    Route::delete('/employees/destroy/{deleteEmployee}', [EmployeeController::class, 'destroy'])
        ->name('employees.destroy');

});

Route::fallback(function () {
    return response()->view('special.unknownRoute');
});