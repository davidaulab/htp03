<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BreweryRequest extends FormRequest
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
            'title'          => 'required|max:100',
            'cuerpo'         => 'required|min:10',
            'place'         => 'required'

        ];
    }
    public function messages()
    {
        return [
            'title' => [
                    'required' => 'El nombre de la cervecería es obligatorio',
                    'max' => 'El nombre de la cervecería tiene más de 15 posiciones'
            ],
            'cuerpo.required' => 'La descripción de la cervecería es obligatoria',
            'place.required' => 'La ubicación de la cervecería es obligatoria'
        ];
    }
}
