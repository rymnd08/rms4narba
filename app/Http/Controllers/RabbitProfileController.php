<?php

namespace App\Http\Controllers;

use App\Models\RabbitProfile;
use App\Http\Requests\StoreRabbitProfileRequest;
use App\Http\Requests\UpdateRabbitProfileRequest;

class RabbitProfileController extends Controller
{

    public function index()
    {
        $data = RabbitProfile::all();
        return view('member.rabbit_profile.index', ['rabbitProfiles' => $data]);
    }
    public function show($id)
    {
        $id = request('id');
        $data = RabbitProfile::find($id);

        if(!$data) return abort(404, 'No data found');

        return view('member.rabbit_profile.show', ['rabbit' => $data]);

    }

    public function create()
    {
        return view('member.rabbit_profile.create');
    }

    public function edit($id)
    {
        return view('member.rabbit_profile.edit', ['id' => $id]);
    }

    public function destroy($id)
    {
        $delete = RabbitProfile::destroy($id);
        if($delete){
            $message = 'Rabbit delete successfully';
            $type = 'success';
        }else{
            $message = 'Rabbit delete successfully';
            $type = 'danger';
        }
        
        return redirect('/member/rabbit-profile')->with('message', $message)->with('type', $type);
    }


    // Process request from form 
    public function store(StoreRabbitProfileRequest $request)
    {
        $create = RabbitProfile::create($request->all());
        if($create){
            $message = 'Rabbit added successfully!';
            $type = 'success';
        }else{
            $type = 'danger';
            $message = 'Rabbit add failed!';
        }
        return back()->with('type', $type)->with('message', $message);

    }
    // public function update(UpdateRabbitProfileRequest $request, RabbitProfile $rabbitProfile)
    // {

    // }

}
