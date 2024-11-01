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

Route::get('/test', function () {
    return view(('test'));
})->name('shopping-cart');