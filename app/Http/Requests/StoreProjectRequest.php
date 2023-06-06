<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|unique:projects|max:150|min:3',
            'image' => 'nullable|max:255',
            'description' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome della repo e obligatorio!',
            'name.unique:projects' => 'Questo nome esiste già!',
            'name.max' => 'Il nome deve essere lungo massimo :max caratteri!',
            'name.min' => 'Il nome deve essere lungo almeno :min caratteri!',
            'image.max' => 'La URL deve essere lungo massimo :max caratteri'
        ];

    }
}
