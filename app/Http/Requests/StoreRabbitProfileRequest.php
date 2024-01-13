<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRabbitProfileRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'rabbit_code' => ['required', 'max:255'],
            'rabbit_name' => ['required','max:255'],
            'cage_number' => ['required','max:255'],
            'sex' => ['required', 'max:255'],
            'type_id' => ['required'],
            'color' => ['required', 'max:255'],
            'breed_id' => ['required'],
            'birthdate' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'rabbit_code.required' => "Rabbit code can't be empty",
    //     ];
    // }
}
