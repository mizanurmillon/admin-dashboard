<?php

use App\Http\Controllers\Web\Backend\Settings\ProfileSettingController;
use App\Http\Controllers\Web\Backend\Settings\SystemSettingController;
use Illuminate\Support\Facades\Route;





//! This route is for updating the user's profile
Route::controller(ProfileSettingController::class)->group(function () {
    Route::post('/update-profile-picture', 'UpdateProfilePicture')->name('update.profile.picture');
    Route::post('/update-profile-password', 'UpdatePassword')->name('update.password');

    //! Route for ProfileController
    Route::get('/profile', 'showProfile')->name('profile.setting');
    Route::post('/update-profile', 'UpdateProfile')->name('update.profile');
});

//! Route for SystemSettingController
Route::controller(SystemSettingController::class)->group(function () {
    Route::get('/system-setting', 'index')->name('system.index');
    Route::post('/system-setting', 'update')->name('system.update');
});