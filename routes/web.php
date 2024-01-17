<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/single', function () {
    return view('single');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/button', function () {
    return view('button');
});
