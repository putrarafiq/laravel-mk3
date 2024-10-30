<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;

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

route::get('/index', [HomeController::class, 'index'])->name('home');
route::get('/about', [HomeController::class, 'about'])->name('about');
route::get('/login', [HomeController::class, 'login'])->name('login');