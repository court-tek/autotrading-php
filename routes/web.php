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
    Route::get('/listings', 'listingsController@index');
    Route::get('/listings/saved', 'listingsController@savedListings');
    Route::get('/listings/{id}', 'listingsController@create');
});
