<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


// Route root mengarahkan ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

// Route untuk duktek
Route::get('/duktek', [ReportController::class, 'dashboard'])->name('dashboard');

// Route untuk maintenance
Route::get('/maintenance', [ReportController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', [ReportController::class, 'dashboard'])->name('dashboard');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Rute untuk Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    $user = Auth::user();
    if ($user->role == 'duktek') {
        return redirect()->route('duktek');
    } elseif ($user->role == 'maintenance') {
        return redirect()->route('maintenance');
    } else {
        return redirect()->route('user');
    }
})->name('home');

// Rute untuk Admin (duktek dan maintenance)
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/duktek', [AdminController::class, 'duktek'])->name('duktek');
    Route::get('/maintenance', [AdminController::class, 'maintenance'])->name('maintenance');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user', [UserController::class, 'user'])->name('user');
});