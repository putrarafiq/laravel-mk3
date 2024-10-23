<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); 
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/login', function () {
    return view('login');
});