<?php

use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::controller(VendorController::class)->group(function () {
    Route::get('vendor/dashboard','dashboard')->name('vendor.dashboard');
//    Route::get('/logout','AdminLogout')->name('logout');
});

require __DIR__.'/auth.php';
