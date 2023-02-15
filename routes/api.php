<?php

use App\Http\Controllers\Api\APIEmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['ApiServerError'])->group(function () {
    Route::get('/employees', [APIEmployeeController::class, 'index']);
    Route::get('/employees/{employee}', [APIEmployeeController::class, 'show']);
    Route::post('/employees/store', [APIEmployeeController::class, 'store']);
    Route::put('/employees/update/{employee}', [APIEmployeeController::class, 'update']);
    Route::delete('/employees/destroy/{employee}', [APIEmployeeController::class, 'destroy']);
});

Route::fallback(function () {
    return response()->json([
        'message' => 'Route not Found.'
    ], 404);
});