<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)) {
            return redirect()->route("oke");
//            return view("");
        } else {
            dd("Login Fail");
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route("login");
    }
}
