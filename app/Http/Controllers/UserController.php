<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users = User::farmUser();
        return view('member.user.index', compact('users'));
    }

    public function create(){
        return view('member.user.create');
    }

    public function store(StoreUserRequest $request){
        $newUser = array_merge(
            $request->validated(), 
            [
                'role' => 'Staff', 
                'farm_id' => Auth::user()->farm_id,
                'password' =>  Hash::make($request->input('password'))
            ],
        );
        User::create($newUser);
        return redirect()->route('user.index')->with(['type' => 'success', 'message' => 'User created successfully!']);
    }
    
    public function edit($id){
        return view('member.user.edit', ['user' => User::find($id)]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'email' => ['email', 'required', "unique:users,email,except,$id"],
            'password' => ['confirmed', 'required', 'min:6', 'max:255']
        ]);

        $user = User::find($id);
        $updated = $user->update($validated);

        if($updated){
            $type = 'success';
            $message = 'User updated successfully!';
        }else{
            $type = 'danger';
            $message = 'User update failed!';
        }

        return back()->with(['type' => $type, 'message' => $message]);
    }
    public function destroy($id){
        $deleted = User::destroy($id);
        $message = $deleted ? 'User deleted successfully!' : 'User delete failed!';
        $type = $deleted ? 'success' : 'danger';
        
        return back()->with(['type' => $type, 'message' => $message]);
    }
}
