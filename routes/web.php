<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KunjunganController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KunjunganController::class, 'index']);
Route::post('/daftar', [KunjunganController::class, 'store']);


Route::prefix('backend')->group(function () {
    Route::get('', [BackendController::class, 'index'])->name('home.backend');
    Route::get('checkin', [BackendController::class, 'checkin'])->name('backend.checkin');
    Route::get('checkout', [BackendController::class, 'checkout'])->name('backend.checkout');
    Route::get('visitor', [BackendController::class, 'getVisitor'])->name('backend.visitor');
    Route::get('history', [BackendController::class, 'history'])->name('history');
});

Route::prefix('checkin')->group(function () {
    Route::get('', [CheckinController::class, 'index'])->name('checkin');
    Route::get('search', [CheckinController::class, 'search']);
    Route::get('success', [CheckinController::class, 'success'])->name('checkin.success');
});

Route::prefix('checkout')->group(function () {
    Route::get('', [CheckoutController::class, 'index'])->name('checkout');
    Route::get('search', [CheckoutController::class, 'search']);
    Route::get('success', [CheckoutController::class, 'success']);
});
