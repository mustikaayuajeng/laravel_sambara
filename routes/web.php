<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('menu_sambara', function () {
    return view('menu');
});

Route::get('product_sambara', function () {
    return view('product');
});

Route::get('profile_sambara', function () {
    return view('profile');
});
