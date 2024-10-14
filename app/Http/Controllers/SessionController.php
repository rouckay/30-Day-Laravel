<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // Validate  request
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6)],
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.',
            ]);
        }

        // attempt to login the user
        Auth::attempt($attributes);

        // regenerate the session token
        request()->session()->regenerate();

        // redirect
        return redirect('/jobs');
    }
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
