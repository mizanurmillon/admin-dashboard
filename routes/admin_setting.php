<?php

use App\Http\Controllers\Web\Backend\Settings\ProfileSettingController;
use Illuminate\Support\Facades\Route;




//! This route is for updating the user's profile
Route::controller(ProfileSettingController::class)->group(function () {
    Route::post('/update-profile-picture', 'UpdateProfilePicture')->name('update.profile.picture');
    Route::post('/update-profile-password', 'UpdatePassword')->name('update.Password');

    //! Route for ProfileController
    Route::get('/profile', 'showProfile')->name('profile.setting');
    Route::post('/update-profile', 'UpdateProfile')->name('update.profile');
});