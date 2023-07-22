<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catatan', [App\Http\Controllers\CatatanController::class, 'index'])->name('catatan')->middleware('auth');
Route::get('/tambah', [App\Http\Controllers\CatatanController::class, 'tambah'])->name('tambah')->middleware('auth');
Route::post('catatan/store', [App\Http\Controllers\CatatanController::class, 'store'])->name('store')->middleware('auth');
Route::get('catatan/cari', [App\Http\Controllers\CatatanController::class, 'cari'])->name('cari')->middleware('auth');
