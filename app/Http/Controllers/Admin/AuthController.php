<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    // show login page
    public function showlogin()
    {
        return view('admin.auth.login');
    }


    // Forget password
    public function forget()
    {
        return view('admin.auth.email');
    }

    // Reset password
    public function reset(Request $request)
    {
        $token = $request->route()->parameter('token');

        return view('admin.auth.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
