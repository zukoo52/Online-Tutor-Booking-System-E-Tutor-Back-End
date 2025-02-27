<?php

use Illuminate\Support\Facades\Route;
use Modules\SubjectManagement\app\Http\Controllers\SubjectManagementController;

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
    Route::apiResource('subjectmanagement', SubjectManagementController::class)->names('subjectmanagement');
});

Route::middleware([
    // 'auth:api',
    // //'role:Student|Admin|Teacher',
    //   'permission:All Subjects',
])
    ->prefix('subject')
    ->group(function () {
        Route::get('allsubject', [SubjectManagementController::class, 'index']);
    });


Route::middleware([
    'auth:api',
    'role:Teacher',
    'permission:Add Subject|Edit Subject|Delete Subject',
])
    ->prefix('subject')
    ->group(function () {
        Route::post('storesubject', [SubjectManagementController::class, 'store']);
        Route::put('updatsubject/{id}', [SubjectManagementController::class, 'update']);
        Route::delete('deletesubject/{id}', [SubjectManagementController::class, 'destroy']);
    });
