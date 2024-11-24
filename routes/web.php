<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'FormLoginPengguna'])->name('pengguna.login');
Route::post('login', [LoginController::class, 'LoginPengguna'])->name('pengguna.login.submit');
Route::get('logout', [LoginController::class, 'logout'])->name('pengguna.logout');

