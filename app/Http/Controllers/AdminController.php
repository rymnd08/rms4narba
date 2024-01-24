<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::with('userType')->get();
        return view('admin.narba_admin.index', compact('admins'));
    }

    public function create()
    {
        //
    }


    public function store(StoreAdminRequest $request)
    {
        //
    }

    public function show(Admin $admin)
    {
        //
    }

    public function edit(Admin $admin)
    {
        return view('admin.narba_admin.edit', ['admin' => $admin]);
    }

    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        
    }

    public function destroy(Admin $admin)
    {
        //
    }
}
