<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function logedIn(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('instansi.index');
        }
        return redirect()->route('login')->withError('Email/password salah!');
    }

    public function logOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect()->route('login');
    }
}
