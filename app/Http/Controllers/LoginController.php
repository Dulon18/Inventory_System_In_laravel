<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function home()
    {
        return view('home');
    }
    public function login(){
        return view('pages.login');
    }
    
    function doLogin(Request $request)
    {
  
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials))
    
    {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
    }

    public function logout()
    { 
        session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
