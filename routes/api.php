<?php 

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

//Register API
Route::controller(RegisterController::class)->prefix('users')->group(function () {
    // User Register
    Route::post('/register', 'Register');

    // Resend OTP
    Route::post('/resend-otp', 'resendOtp');

    // Verify OTP
    Route::post('/verify-otp', 'verifyOtp');

});

//Login API
Route::controller(LoginController::class)->prefix('users')->group(function () {
    // User Login
    Route::post('/login', 'Login');

    // Verify Email
    Route::post('/email-verify', 'emailVerify');

    // Resend OTP
    Route::post('/otp-resend', 'otpResend');

    // Verify OTP
    Route::post('/otp-verify', 'otpVerify');

    //Reset Password
    Route::post('/reset-password', 'resetPassword');
});

// User Profile
Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::controller(UserController::class)->prefix('user')->group(function () {
        Route::get('/profile', 'profile');
        Route::post('/update-profile', 'updateProfile');
        Route::post('/logout', 'logout');
        Route::post('/change-password', 'passwordChange');
        Route::delete('/delete-account', 'deleteAccount');
    });
});