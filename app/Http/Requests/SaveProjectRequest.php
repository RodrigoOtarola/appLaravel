<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()//Se utiliza para ver si el usuario que realiza la solicitud esta autorizado
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()//Reglas de validación
    {
        return [
            'title'=> 'required',
            'description'=>'required',
            'url'=>['required',Rule::unique('projects')->ignore($this->route('project'))]//Para pasar la ruta e ignorar esa ruta en caso de editar el mismo archibo
        ];
    }
}
