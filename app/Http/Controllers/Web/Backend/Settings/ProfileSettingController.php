<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileSettingController extends Controller
{
    /**
     * Display the profile settings page.
     *
     * @return View
     */
    public function showProfile()
    {
        $userDetails = Auth::user();

        return view('backend.layouts.settings.profile_settings', compact('userDetails'));
    }
}
