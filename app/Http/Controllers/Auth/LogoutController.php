<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseControllers\AuthController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends AuthController
{
    public function logout(Request $request)
    {
        // Auth::logout();
        // // session()->remove('admin_user_id');
        // return redirect()->route('login');

        $user = Auth::user();
        if ($user) {
            if ($user->user_type == User::TYPE_ADMIN) {
                Auth::guard('admin')->logout();
            } elseif ($user->user_type == User::TYPE_HOTEL) {
                Auth::guard('hotel')->logout();
                $request->session()->forget('hotel_data');
            } else {
                Auth::guard('web')->logout(); 
            }
        }

        return redirect()->route('login')->with('status', 'Logged out successfully');
    }

}
