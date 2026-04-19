<?php

use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\User\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

 Route::prefix('users')->name('admin.users.')->group(function () {
    Route::resource('/', UsersController::class)->parameter('', 'user');
    Route::patch('/{user}/status', [UsersController::class, 'changeStatus'])->name('status');
});