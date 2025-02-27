<?php

use Illuminate\Support\Facades\Route;
use Modules\TutorJobManagement\app\Http\Controllers\TutorJobManagementController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('tutorjobmanagement', TutorJobManagementController::class)->names('tutorjobmanagement');
});


Route::middleware([
    'auth:api',
    'role:Student',
    'permission:Add Tutor Job',
])
    ->prefix('tuturjob')
    ->group(function () {
        Route::post('storeTutorJob', [TutorJobManagementController::class, 'store']);
        Route::put('updateTutorJob/{id}', [TutorJobManagementController::class, 'update']);
        Route::delete('deleteTutorJob/{id}', [TutorJobManagementController::class, 'destroy']);
    });


Route::middleware([
    'auth:api',
    'role:Teacher',
    'permission:View All Jobs',
])
    ->prefix('tuturjob')
    ->group(function () {
        Route::get('allTutorJob', [TutorJobManagementController::class, 'index']);
        Route::post('showtutorjob', [TutorJobManagementController::class, 'showData']);
    });
