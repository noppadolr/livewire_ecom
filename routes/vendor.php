<?php

use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::controller(VendorController::class)->group(function () {
    Route::middleware(['auth','verified','rolemanager:vendor'])->group(function () {
            Route::get('vendor/dashboard','dashboard')->name('vendor.dashboard');
            Route::get('vendor/logout','Logout')->name('vendor.logout');
    });
});

require __DIR__.'/auth.php';
