<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Miftah Fauzi']);
});

Route::get('/', function () {
    return view('home');
});
