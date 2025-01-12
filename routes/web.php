<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;


// Route untuk menampilkan form registrasi
Route::get('/daftar', function () {
    return view('daftar'); // Nama file view daftar.blade.php
});

// Route untuk memproses form registrasi
Route::post('/daftar/submit', [RegisterController::class, 'submit'])->name('register.submit');

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
use App\Http\Controllers\PickupController;

Route::get('/admin/pickup', [PickupController::class, 'adminPickup'])->name('admin.pickup')->middleware('auth');
Route::put('/admin/pickup/{id}/update', [PickupController::class, 'updateStatus'])->name('pickup.updateStatus')->middleware('auth');




Route::get('/pickup', [PickupController::class, 'index'])->name('pickup')->middleware('auth');
Route::post('/pickup/store', [PickupController::class, 'store'])->name('pickup.store')->middleware('auth');
Route::put('/pickup/{id}/update-status', [PickupController::class, 'updateStatus'])->name('pickup.updateStatus')->middleware('auth');

Route::get('/', function () {
    return view('tentangKami');
});

Route::get('/mitra', function () {
    return view('mitra');
});

Route::get('/layanan', function () {
    return view('layanan');
});

// routes/web.php

use App\Http\Controllers\DropoffController;

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/dropoff', [DropoffController::class, 'tampil'])->name('dropoff')->middleware('auth');
Route::post('/dropoff/submit', [DropoffController::class, 'submit'])->name('dropoff.submit')->middleware('auth');

Route::get('/admin/dropoff', [DropoffController::class, 'adminDropoff'])->name('admin.dropoff')->middleware('auth');
Route::put('/admin/dropoff/{id}/update-status', [DropoffController::class, 'updateStatus'])->name('dropoff.updateStatus')->middleware('auth');
