<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\SKTMController;
use App\Http\Controllers\LaporRWController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.landing-layout');
});

Route::group(['middleware' => ['auth']], function () {
    
    // Route untuk halaman utama
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [MenuController::class, 'home'])->name('home');
        
        // Route untuk halaman pengajuan SKCK
        Route::get('/page-skck', [MenuController::class, 'skck'])->name('skck');
        Route::post('/page-skck/submit', [MenuController::class, 'submitSkck'])->name('skck.submit');
        
        // Route untuk halaman formulir pengajuan SKTM
        Route::get('/page-sktm', [MenuController::class, 'sktm'])->name('sktm');
        Route::post('/page-sktm/submit', [MenuController::class, 'submitSktm'])->name('sktm.submit');
        
        Route::get('/page-lapor', [LaporRWController::class, 'lapor'])->name('lapor');
        Route::post('/page-lapor/submit', [LaporRWController::class, 'store'])->name('lapor.submit');
    });
});

Auth::routes();
