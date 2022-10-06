<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('authh.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            if(Auth()->user()->role == 'admin')
             {
                 // return redirect()->intended(route('admin.index'));
                 return redirect()->route('admin');
             }
            if(Auth()->user()->role == 'pemilik_kost')
                {
                    return redirect()->route('admin');
                }
        }
        return back()->with('loginError', 'login gagal!');
    }

    public function logout() 
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}

