<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuideController;
use Illuminate\Support\Facades\Auth;


// Route root mengarahkan ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/lacak_dm', function () {
    return view('lacak_dm');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/guides/create', [GuideController::class, 'create'])->name('guides.create');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/panduan', [GuideController::class, 'userIndex'])->name('panduan');
    Route::get('/user', [UserController::class, 'user'])->name('user');
    Route::get('/guides/{guide}', [GuideController::class, 'show'])->name('guides.show');


});



// Rute untuk Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Rute untuk Admin (duktek dan maintenance)
Route::middleware(['auth:admin'])->group(function () {

    Route::get('/guides', [GuideController::class, 'index'])->name('guides.index');
    Route::delete('/guides/{guide}', [GuideController::class, 'destroy'])->name('guides.destroy');
    Route::get('/guides/{guide}/edit', [GuideController::class, 'edit'])->name('guides.edit');
    Route::put('/guides/{guide}', [GuideController::class, 'update'])->name('guides.update');
    });
    


Route::post('/guides', [GuideController::class, 'store'])->name('guides.store');


