<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OwnerController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified', 'is_admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/owners', [OwnerController::class, 'index'])->name('owner.index');
    Route::post('/owners/store', [OwnerController::class, 'store'])->name('owner.store');
});
