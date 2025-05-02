<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\ActivityController;
use App\Http\Controllers\Api\BarangayController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\AccessTokenController;
use App\Http\Controllers\Api\JobPositionController;
use App\Http\Controllers\Api\EmployeeStatusController;
use App\Http\Controllers\Api\EmploymentTypeController;
use App\Http\Controllers\Api\EmployeeAttachmentController;


Route::prefix('v1')->namespace('App\Http\Controllers\Api')->group(function () {
    Route::middleware('throttle:api')->group(function () {
        Route::middleware('auth:sanctum')->group(function () {
            Route::apiResource('employees', EmployeeController::class);
            Route::apiResource('users', UserController::class)->withTrashed();
            Route::apiResource('activities', ActivityController::class);
            Route::apiResource('regions', RegionController::class);
            Route::apiResource('provinces', ProvinceController::class);
            Route::apiResource('cities', CityController::class);
            Route::apiResource('barangays', BarangayController::class);
            Route::apiResource('attachments', EmployeeAttachmentController::class)
                ->withTrashed(['show']);
            Route::apiResource('employment-types', EmploymentTypeController::class);
            Route::apiResource('job-positions', JobPositionController::class);
            Route::apiResource('departments', DepartmentController::class);
            Route::apiResource('employee-statuses', EmployeeStatusController::class);
    });
    
        Route::prefix('auth')->group(function () {
            Route::post('login', [AccessTokenController::class, 'store'])
                ->middleware('guest');
            Route::post('logout', [AccessTokenController::class, 'destroy'])
                ->middleware('auth:sanctum');
        });
    });
});