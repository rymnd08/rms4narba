<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBreedRequest extends FormRequest
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
            'breed' => ['required', 'max:255', Rule::unique('breeds', 'breed')->ignore(request('id'))],
            'rabbit_type' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'breed.unique' => 'Rabbit breed was already taken'
        ];
    }
}
