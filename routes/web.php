<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});


// Route untuk menampilkan form registrasi
Route::get('/register', function () {
    return view('daftar'); // Nama file view register.blade.php
});

// Route untuk memproses form registrasi
Route::post('/register/submit', [RegisterController::class, 'submit'])->name('register.submit');

use App\Http\Controllers\Auth\LoginController;

Route::get('/login', function () {
    return view('login'); // Menampilkan form login
});

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/daftar', function () {
    return view('daftar');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/pickup', function () {
    return view('pickup');
});

Route::get('/dropoff', function () {
    return view('dropoff');
});
