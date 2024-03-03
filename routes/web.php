<?php

use App\Http\Controllers\Admin\AdminController;
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

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function() {
    // ADmin home page
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index');
    
    // // Article routes
    // Route::get('articles-create', 'ArticleController@create')->middleware(['auth', 'is_admin']);
    // Route::get('articles-all', 'ArticleController@index')->middleware(['auth', 'is_admin']);
    // Route::get('articles-edit/{id}', 'ArticleController@edit')->middleware(['auth', 'is_admin'])->name('articles.edit');
    // Route::post('/articles', [ArticleController::class, 'store'])->name('articles');
    // Route::patch('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
    // Route::get('articles/{id}/status', [ArticleController::class, 'status'])->name('photos.status');
    // Route::get('/articles-delete/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

    // // Photo routes
    // Route::get('photos/{id}', 'PhotosController@index')->middleware(['auth', 'is_admin'])->name('photos.index');
    // Route::get('photos-create/{id}', 'PhotosController@create')->middleware(['auth', 'is_admin'])->name('photos.create');
    // Route::get('photos/{id}/edit/{photo_id}', 'PhotosController@edit')->middleware(['auth', 'is_admin'])->name('photos.edit');
    // Route::post('photos/{id}', [PhotosController::class, 'store'])->name('photos.store');
    // Route::get('photos/{id}/featured/{photo_id}', [PhotosController::class, 'featured'])->name('photos.featured');
    // Route::get('/photos/{id}/delete/{photo_id}', [PhotosController::class, 'destroy'])->name('photos.destroy');
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
