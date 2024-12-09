<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::controller(AdminController::class)->group(function () {
    Route::middleware(['auth','verified','rolemanager:admin'])->group(function () {
        Route::get('admin/dashboard','dashboard')->name('admin.dashboard');
        Route::get('admin/logout','AdminLogout')->name('admin.logout');
    });

});

require __DIR__.'/auth.php';
