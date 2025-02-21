<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard')->with('success', 'Giriş Başarılı');
        }

        return back()->withErrors(['email', 'Giriş Bilgileri Hatalı!']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Çıkış Yaptınız');
    }
}
