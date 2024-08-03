<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Protected routes for authenticated users
Route::middleware('auth')->group(function () {
    // Product CRUD routes
    Route::resource('products', ProductController::class);
});

// Include authentication routes
require __DIR__.'/auth.php';
