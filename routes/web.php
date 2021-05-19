<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\KunjunganController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KunjunganController::class, 'index']);
Route::post('/daftar', [KunjunganController::class, 'store']);


Route::prefix('backend')->group(function () {
    Route::get('', [BackendController::class, 'index'])->name('home.backend');
    Route::get('checkin', [BackendController::class, 'checkin'])->name('checkin');
    Route::get('search', [BackendController::class, 'getCheckin']);
    Route::get('checkout', [BackendController::class, 'checkout'])->name('checkout');
    Route::post('checkout', [BackendController::class, 'postCheckout']);
    Route::get('history', [BackendController::class, 'history'])->name('history');
});
