<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Show the form for user login.
     *
     * @return \Illuminate\View\View
     */
    public function showLogin()
    {
        return view('pages.auth.login');
    }


    /**
     * Show the form for resetting a user's password.
     *
     * @return \Illuminate\View\View
     */
    public function showForgotPassword()
    {
        return view('pages.auth.forgot-password');
    }

    /**
     * Show the form for resetting a user's password.
     *
     * @return \Illuminate\View\View
     */
    public function showResetPassword()
    {
        return view('pages.auth.forgot-password');
    }

    /**
     * Authenticate a user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    /**
     * Log the user out (Invalidate the session).
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
