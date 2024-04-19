<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersona extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre'=>'required',
            'apellido'=>'required',
            'email'=>'required',
            'direccion'=>'required'
        ];
    }
    public function messages(): array
    {
        return[
            'nombre.required'=>'El nombre es obligatorio',
            'apellido.required'=>'El apellido es obligatorio',
            'email.required'=>'El email es obligatorio',
            'direccion.required'=>'La direccion es obligatorio' 
        ];
    }
}
