<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('user');
});

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');;
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [HomeController::class, 'loginatempt']);
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

Route::resource('user', 'App\Http\Controllers\UserController');
