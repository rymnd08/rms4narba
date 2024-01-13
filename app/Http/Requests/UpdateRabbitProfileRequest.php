<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRabbitProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'rabbit_code' => ['required', 'max:255', Rule::unique('rabbit_profiles','rabbit_code')->ignore(request('id'))],
            'rabbit_name' => ['required','max:255'],
            'cage_number' => ['required','max:255'],
            'sex' => ['required', 'max:255'],
            'type_id' => ['required'],
            'color' => ['required', 'max:255'],
            'breed_id' => ['required', 'max:255'],
            'birthdate' => ['required', 'max:255', "before_or_equal:today"],
            'description' => ['required', 'max:255'],
        ];
    }
}
