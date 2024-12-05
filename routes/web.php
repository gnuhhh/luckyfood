<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;

// Dang nhap
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/shop-grid', [CategoryController::class, 'getCategory'])->name('shop-grid');


Route::get('/shopping-cart', function () {
    return view(('shopping-cart'));
})->name('shopping-cart');

Route::get('/contact', function () {
    return view(('contact'));
})->name('contact');

Route::get('/register', function () {
    return view(('register'));
})->name('register');

Route::get('/party', function () {
    return view('ordering-party');
})->name('ordering-party');

Route::get('/signin', [ClientController::class, 'signin'])->name('signin');
Route::post('/adminlogin', [AuthController::class, 'login'])->name('adminlogin');
Route::post('/clientlogin', [ClientController::class, 'login'])->name('clientlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');

Route::middleware('guard:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});