<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class NarbaAuthControler extends Controller
{

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('admin-dashboard'));
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function store(StoreAdminRequest $request){
        
        $request->merge(['user_type_id' => 1]);
        
        $request['password'] = Hash::make($request->input('password'));
        $newAdmin = Admin::create($request->all());

        if($newAdmin){
            $type ='success';
            $message = 'New admin has been created!';
        }else{
            $type = 'danger';
            $message = 'Admin create failed!';
        }

        return redirect()->route('narba-login-page')->with(['type' => $type, 'message' => $message]);
    }
}
