<?php

use App\Http\Controllers\Api\AccessTokenController;
use App\Http\Controllers\Api\ActivityController;
use App\Http\Controllers\Api\BarangayController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\DailyTimeReportController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\EmployeeAttachmentController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\EmployeeStatusController;
use App\Http\Controllers\Api\EmploymentTypeController;
use App\Http\Controllers\Api\JobPositionController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->namespace('App\Http\Controllers\Api')->group(function () {
    Route::middleware('throttle:api')->group(function () {
        Route::middleware('auth:sanctum')->group(function () {
            Route::apiResource('employees', EmployeeController::class)
                ->withTrashed(['show', 'update', 'destroy']);

            Route::apiResource('users', UserController::class)
                ->withTrashed(['show', 'update', 'destroy']);

            Route::apiResource('activities', ActivityController::class)
                ->only(['index']);

            Route::apiResource('regions', RegionController::class)
                ->only(['index', 'show']);

            Route::apiResource('provinces', ProvinceController::class)
                ->only(['index', 'show']);

            Route::apiResource('cities', CityController::class)
                ->only(['index', 'show']);

            Route::apiResource('barangays', BarangayController::class)
                ->only(['index', 'show']);

            Route::apiResource('attachments', EmployeeAttachmentController::class)
                ->withTrashed(['show', 'destroy'])
                ->except(['index', 'update']);

            Route::apiResource('employment-types', EmploymentTypeController::class)
                ->only(['index']);

            Route::apiResource('job-positions', JobPositionController::class)
                ->only(['index']);

            Route::apiResource('departments', DepartmentController::class)
                ->only(['index', 'show']);

            Route::apiResource('companies', CompanyController::class)
                ->withTrashed(['show', 'update', 'destroy']);

            Route::apiResource('employee-statuses', EmployeeStatusController::class)
                ->only(['index']);

            Route::apiResource('dtrs', DailyTimeReportController::class)
                ->only(['index', 'store']);
        });

        Route::prefix('auth')->group(function () {
            Route::post('login', [AccessTokenController::class, 'store'])
                ->middleware('guest');

            Route::post('logout', [AccessTokenController::class, 'destroy'])
                ->middleware('auth:sanctum');
        });
    });
});
