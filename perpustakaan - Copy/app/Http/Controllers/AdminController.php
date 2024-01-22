<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

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
                return redirect()->intended('/dashboard');
            } else {
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
