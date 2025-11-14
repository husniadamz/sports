<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // tukar ikut nama view login kau
    }

    public function login(Request $request)
    {
        // 1. Validate input
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Attempt login using Auth::attempt()
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            // regenerate session to prevent fixation
            $request->session()->regenerate();

            // redirect to home/dashboard
            return redirect()->intended(route('dashboard'))
                ->with('success', 'Welcome back to SportsCentre!');
        }

        // 3. If login fail
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }
}
