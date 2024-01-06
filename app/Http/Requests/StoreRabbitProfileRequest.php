<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRabbitProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'rabbit_code' => ['required', 'max:255'],
            'rabbit_name' => ['required','max:255'],
            'cage_number' => ['required','max:255'],
            'sex' => ['required', 'max:255'],
            'type' => ['required', 'max:255'],
            'color' => ['required', 'max:255'],
            'breed' => ['required', 'max:255'],
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
