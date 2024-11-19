<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;

// Dang nhap
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/shop-grid', function () {
    return view(('shop-grid'));
})->name('shop-grid');

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

Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(AuthMiddleware::class);