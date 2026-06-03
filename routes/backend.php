<?php

use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\NotificationController;
use App\Http\Controllers\Web\Backend\User\UsersController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

 Route::prefix('users')->name('admin.users.')->group(function () {
    Route::resource('/', UsersController::class)->parameter('', 'user');
    Route::patch('/{user}/status', [UsersController::class, 'changeStatus'])->name('status');
});

// Notifications routes for backend
Route::middleware('auth')->prefix('notifications')->name('notifications.')->group(function () {
    Route::get('/', [NotificationController::class, 'index'])->name('index');
    Route::get('/fetch', [NotificationController::class, 'fetch'])->name('fetch');
    Route::post('{id}/read', [NotificationController::class, 'markRead'])->name('markRead');
    Route::delete('{id}', [NotificationController::class, 'destroy'])->name('destroy');
});