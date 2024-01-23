<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Http\Requests\StoreBreedRequest;
use App\Http\Requests\UpdateBreedRequest;
use App\Models\RabbitType;

class BreedController extends Controller
{
    public function index()
    {
        $data = Breed::orderBy('breed')->get();
        return view('admin.breed.index', ['breeds' => $data]);
    }

    public function create()
    {
        $data = RabbitType::all();

        return view('admin.breed.create', ['rabbit_types' => $data]);
    }


    public function store(StoreBreedRequest $request)
    {
        $request->merge(['type_id' => (int) $request->get('rabbit_type')]);
        
        $newBreed = Breed::create($request->all());

        if($newBreed){
            $type = 'success';
            $message = 'New breed has been successfully added!';
        }else{
            $type = 'danger';
            $message = 'Failed adding new breed!';
        }

        return back()->with(['type' => $type, 'message' => $message]);
    }

    public function show(Breed $breed)
    {
        //
    }

    public function edit($id)
    {

       $breed = Breed::find($id);

       return view('admin.breed.edit', ['breed_db' => $breed, 'rabbit_types' => RabbitType::all()]);
    }

    public function update(UpdateBreedRequest $request, Breed $breed)
    {
        $request->merge(['type_id' => (int) $request->get('rabbit_type')]);

        $breed = Breed::find(request('id'));
        $updated = $breed->update($request->all());
        
        if($updated){
            $alert = 'success';
            $message = 'Rabbit was updated successfully!';
        }else{
            $alert = 'danger';
            $message = 'Rabbit updated failed!';
        }

        return back()->with(['type' => $alert, 'message' => $message]);
    }

    public function destroy($id)
    {
        try {
            $deleted = Breed::destroy($id);

            if($deleted){
                $type = 'success';
                $message = 'Rabbit deleted successfully!';
            }else{
                $type = 'danger';
                $message = 'Rabbit delete failed';
            }
            return back()->with(['type' => $type, 'message' => $message]);

        } catch (\Throwable $th) {

            if(stripos($th->getMessage(), 'foreign key constraint fails')){
                $message = 'Rabbit breed is currently use in other table';
            }else{
                $message = $th->getMessage();
            }
            
            return back()->with(['type' => 'danger', 'message' => $message]);
        }
    }
}
