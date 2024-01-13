<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use Illuminate\Http\Request;
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
        $breeds = Breed::all();
        return view('member.rabbit_profile.create',['breeds' => $breeds]);
    }

    public function edit($id)
    {   
        $rabbitProfile = RabbitProfile::findOrFail($id);

        $breeds = Breed::all();

        return view('member.rabbit_profile.edit', [
            'rabbit' => $rabbitProfile,
            'breeds' => $breeds
        ]);
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
        $request->merge(['farm_id' => 1]);

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
    public function update(UpdateRabbitProfileRequest $request, $id)
    {
        $request->merge(['rabbit_image' => 'https://api.dicebear.com/7.x/initials/svg?seed='. $request->rabbit_code . '&chars=1']);

        $request['type_id'] = (int) $request->type_id;
        $request['breed_id'] = (int) $request->breed_id;

        $rabbit = RabbitProfile::find($id);

        $update = $rabbit->update($request->except(['_token', '_method']));

        if($update){
            $type = 'success';
            $message = 'Rabbit was updated successfully!';
        }else{
            $type = 'danger';
            $message = 'Rabbit update failed!';
        }

        return back()->with('type', $type)->with('message', $message);

    }

}
