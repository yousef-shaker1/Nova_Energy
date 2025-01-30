<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin_PageController;
use App\Http\Controllers\User_PageController;


Route::controller(User_PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/products', 'products')->name('products');
    Route::get('/prices', 'prices')->name('prices');
    Route::get('/team', 'team')->name('team');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(Admin_PageController::class)->middleware(['auth', 'verified','Is_admin'])->name('admin.')->group(function () {
    Route::get('/dachboard', 'index')->name('dachboard');
    Route::get('/price', 'price_page')->name('price');
    Route::get('/user', 'user_page')->name('user');
});

Route::get('auth/google', [GoogleController::class, 'googlepage'])->name('googlepage');
Route::get('/auth/google/callback', [GoogleController::class, 'googlecallback'])->name('googlecallback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
