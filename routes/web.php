<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/signin', function () {
    return view(('signin'));
})->name('signin');

Route::get('/register', function () {
    return view(('register'));
})->name('register');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');