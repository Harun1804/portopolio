<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email,'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('success','Failed Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success','Successfully Logout');
    }
}
