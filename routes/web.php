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


Route::namespace('App\Http\Controllers\Front')->group(function() {
    // welcome page
    Route::get('/', 'welcomeController@index');

    // Main marketplace Routes
    Route::get('/listings/{model}', 'listingsController@index');
    Route::get('/listings/{id}/{slug}', 'listingsController@show');

    // account routes
    Route::get('/account/saved', 'listingsController@save');
});
