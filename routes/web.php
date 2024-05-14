<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomepageController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/login', [LoginController::class, 'index']); // ini kalau sudah masuk middleware ditambahin
Route::get('/register', [RegisterController::class, 'index']); 
Route::get('/posts', [PostController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']); // ini kalau sudah masuk middleware ditambahin

Route::get('/posts', [PostController::class, 'index']);
Route::get('/homepage', [HomepageController::class, 'index']);
