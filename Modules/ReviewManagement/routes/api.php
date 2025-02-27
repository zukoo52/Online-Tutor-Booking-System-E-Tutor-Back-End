<?php

use Illuminate\Support\Facades\Route;
use Modules\ReviewManagement\app\Http\Controllers\ReviewManagementController;

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
    Route::apiResource('reviewmanagement', ReviewManagementController::class)->names('reviewmanagement');
});


Route::middleware([

    ])
->prefix('review')
    ->group(function () {

Route::post('storereview', [ReviewManagementController::class, 'store']);
Route::get('allreview', [ReviewManagementController::class, 'index']);
Route::put('updatreview/{id}', [ReviewManagementController::class, 'update']);
Route::delete('deletereview/{id}', [ReviewManagementController::class, 'destroy']);

});
