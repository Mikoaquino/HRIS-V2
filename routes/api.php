<?php

use App\Http\Controllers\Api\V1\AccessTokenController;
use App\Http\Controllers\Api\V1\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\EmployeeController;

Route::prefix('v1')->namespace('App\Http\Controllers\Api\V1')->group(function () {
    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('employees', EmployeeController::class);
        Route::apiResource('users', UserController::class);
        Route::apiResource('activities', ActivityController::class)->only(['index']);
    });

    Route::prefix('auth')->group(function () {
        Route::post('login', [AccessTokenController::class, 'store'])->middleware('guest');
        Route::post('logout', [AccessTokenController::class, 'destroy'])->middleware('auth:sanctum');
    });
});
