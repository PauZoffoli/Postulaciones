<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateApoderadoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
         return [
             'apoderado' => ['required','max:100'],
             'apPatApo' => ['required','max:100'],
             'apMatApo' => ['required','max:100'],
             'fonoApo' => ['required','max:100'],
             'rutApo' => ['required','max:100'],
             'dvApo' => ['required','max:100'],
             'correoApo'=> ['required','max:100']
        ];
    }

    public function apoderados()
    {
        return[
            'apoderado.required' => 'Debes escribir un nombre de apoderado.',
            'apoderado.max' => 'El nombre no puede superar los 100 caracteres' 
        ];
    }
}
