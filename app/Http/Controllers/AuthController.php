<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email',],
            'password' => ['required'],
        ],[
            'password.required' => "Password can't be empty."
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('member-dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(StoreUserRequest $request)
    {
        $request->merge(['user_type_id' => 1]);
        $request->merge(['farm_id' => rand()]);

        $request['password'] = Hash::make($request->input('password'));

        User::create($request->all());

        return redirect()->route('login-page')->with(['type' => 'success', 'message' => 'User created successfully!']);
    }

    // Views 
    public function login()
    {
        return view('pages.login');
    }
    public function create()
    {
        return view('pages.register');
    }
}
