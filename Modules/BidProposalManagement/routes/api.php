<?php

use Illuminate\Support\Facades\Route;
use Modules\BidProposalManagement\app\Http\Controllers\BidProposalManagementController;

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
    Route::apiResource('bidproposalmanagement', BidProposalManagementController::class)->names('bidproposalmanagement');
});

Route::middleware([])
    ->prefix('BidProposal')
    ->group(function () {
        Route::post('storeBidProposal', [BidProposalManagementController::class, 'store']);
        Route::get('allBidProposal', [BidProposalManagementController::class, 'index']);
        Route::put('/updateBidProposal/{id}', [BidProposalManagementController::class, 'update']);
        Route::delete('deleteBidProposal/{id}', [BidProposalManagementController::class, 'destroy']);
    });
