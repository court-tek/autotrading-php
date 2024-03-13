<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ListingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'v1'], function() {
    Route::get('photos/{id}', [ListingController::class, 'show']);
    Route::get('photos/{id}/welcome', [ListingController::class, 'welcome'])->name('featured.image');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
