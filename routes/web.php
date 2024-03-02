<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/2024')->namespace('App\Http\Controllers\Front')->group(function() {
    // Main Blog Routes
    Route::get('/listings', 'ListingController@index');
    Route::get('/listings/saved', 'ListingController@savedListings');
    Route::get('/listings/{id}', 'ListingController@create');
});
