<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ReviewController;



// Route untuk melihat semua ulasan
Route::get('reviews', [ReviewController::class, 'getAllReviews'])->name('reviews.index');

// Route untuk melihat ulasan berdasarkan ID report
Route::get('reviews/report/{report}', [ReviewController::class, 'getReviewsByReport'])->name('reviews.report');

// Route untuk membuat ulasan
Route::post('reviews', [ReviewController::class, 'storeReviewAPI'])->name('reviews.store');

// Route untuk menghapus ulasan berdasarkan ID review
Route::delete('reviews/{review}', [ReviewController::class, 'deleteReviewAPI'])->name('reviews.delete');




Route::prefix('guides')->name('api.guides.')->group(function () {
    Route::get('/', [GuideController::class, 'apiIndex'])->name('index');        // Tampilkan semua panduan
    Route::get('/{guide}', [GuideController::class, 'apiShow'])->name('show');   // Tampilkan detail panduan
    Route::post('/', [GuideController::class, 'apiStore'])->name('store');       // Tambah panduan
    Route::delete('/{guide}', [GuideController::class, 'apiDestroy'])->name('destroy'); // Hapus panduan
    Route::put('/{guide}', [GuideController::class, 'apiUpdate'])->name('update'); // Update panduan
});

