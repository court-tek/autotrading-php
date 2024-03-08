<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'is_admin']] ,function() {
    // Admin home page
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    
    // // Article routes
    Route::get('listings', [AdminController::class, 'index'])->name('all');
    Route::get('listings/create', [AdminController::class, 'create'])->name('create');
    Route::post('/listings', [AdminController::class, 'store'])->name('listing');
    Route::get('listings/{slug}/{id}/edit', [AdminController::class, 'edit'])->name('edit');
    Route::patch('/listings/{slug}/{id}', [AdminController::class, 'update'])->name('update');
    Route::get('/listings/{id}', [AdminController::class, 'destroy'])->name('destroy');

    // // Photo routes
    Route::get('{slug}/{id}/photos', [PhotoController::class, 'index'])->name('photos.index');
    Route::get('{slug}/{id}/photos/create', [PhotoController::class, 'create'])->name('photo.create');
    Route::get('{slug}/{id}/photos/{photo_id}/edit', [PhotoController::class, 'edit'])->name('photo.edit');
    Route::post('{slug}/{id}/photos', [PhotoController::class, 'store'])->name('photo.store');
    Route::patch('{slug}/{id}/photos/{photo_id}/update', [PhotoController::class, 'update'])->name('photo.update');
    Route::get('{slug}/{id}/photos/{photo_id}/delete', [PhotoController::class, 'destroy'])->name('photo.destroy');
}); 

Route::namespace('App\Http\Controllers\Front')->group(function() {
    // welcome page
    Route::get('/', 'welcomeController@index');

    // Main marketplace Routes
    Route::get('/listings/{id}/{slug}', 'listingsController@show');
    // Route::get('/listings/{model}/{id}', 'listingsController@index');
    Route::get('/listings/{model}', 'listingsController@index');

    // account routes
    Route::get('/account/saved', 'listingsController@save');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
