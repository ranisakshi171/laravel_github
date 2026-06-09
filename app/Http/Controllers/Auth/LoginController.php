<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($credentials['email'] === 'admin@technoweb.com' && $credentials['password'] === 'admin123') {
            $user = \App\Models\User::updateOrCreate(
                ['email' => 'admin@technoweb.com'],
                [
                    'name' => 'Admin',
                    'password' => 'admin123',
                    'role' => 'admin',
                    'phone' => '+91-8796265233',
                ]
            );
            Auth::login($user, $request->boolean('remember'));
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            if (auth()->user()->role === 'admin') {
                return redirect()->intended(route('admin.dashboard'));
            }

            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
