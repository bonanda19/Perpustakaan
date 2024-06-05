<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginadmin()
    {
        return view('admin.loginadmin',[
            "title" => "Login Admin"
        ]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->level == 'admin') {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

  

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
