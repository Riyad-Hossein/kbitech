<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseControllers\AuthController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends AuthController
{
    public function showLogin()
    {   
        $this->setPageTitle("Login");
        return $this->view('backend.auth.login');
    }

    public function login(Request $request){
        try {

            $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
            ]);
            
            $user = User::where('deleted', User::DELETED_NO)
                ->where(function ($q) use ($request) {
                    $q->where('phone', $request->username)
                      ->orWhere('email', $request->username)
                      ->orWhere('username', $request->username);
                })
                ->orderBy('id', 'DESC')
                ->first();
            
            if (empty($user) || !Hash::check($request->password, $user->password)) {
                throw new \Exception('Invalid Credentials');
            }

            if ($user->status != User::STATUS_ACTIVE) {
                throw new \Exception('Your account is inactive');
            }

            if ($user->user_type == User::TYPE_ADMIN) {
                Auth::guard('admin')->login($user, $request->remember_me ?? false);
            } else {
                throw new \Exception('Invalid User');
            }
            
            $redirectUri = route('dashboard');

        } catch (\Exception $exception) {
            return $this->returnAjaxException($exception);
        }

        return $this->returnAjaxSuccess([
            'login' => 'success',
            'redirectUri' => $redirectUri,
        ], "Login Success");
    }
}
