<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CityController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\RegionController;
use App\Http\Controllers\Api\V1\ActivityController;
use App\Http\Controllers\Api\V1\BarangayController;
use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\ProvinceController;
use App\Http\Controllers\Api\V1\DepartmentController;
use App\Http\Controllers\Api\V1\EmployeeStatusController;
use App\Http\Controllers\Api\V1\AccessTokenController;
use App\Http\Controllers\Api\V1\JobPositionController;
use App\Http\Controllers\Api\V1\EmploymentTypeController;
use App\Http\Controllers\Api\V1\EmployeeAttachmentController;

Route::prefix('v1')->namespace('App\Http\Controllers\Api\V1')->group(function () {
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