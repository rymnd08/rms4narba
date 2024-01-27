<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){
        $users = User::all();
        return view('member.user.index', compact('users'));
    }

    public function create(){
        return view('member.user.create');
    }

    public function store(StoreUserRequest $request){
        $request->merge(['user_type_id' => 1]);
        $request->merge(['farm_id' => Auth::user()->farm_id]);

        $request['password'] = Hash::make($request->input('password'));

        User::create($request->except(['_token', 'method', 'passoword_confirmation']));

        return redirect()->route('user.index')->with(['type' => 'success', 'message' => 'User created successfully!']);
    }
}
