<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\EmployeeController;

// TODO: Add middleware (policies|gate, auth, etc.)
Route::prefix('v1')->namespace('App\Http\Controllers\Api\V1')->group(function () {
    Route::apiResource('employees', EmployeeController::class);
    Route::apiResource('users', UserController::class);
});
