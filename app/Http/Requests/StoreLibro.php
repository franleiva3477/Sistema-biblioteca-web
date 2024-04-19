<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibro extends FormRequest
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
            'titulo'=>'required',
            'autor'=>'required',
            'editorial'=>'required',
            'contenido'=>'required'
        ];
    }
    public function messages(): array
    {
        return[
            'titulo.required'=>'El titulo es obligatorio',
            'autor.required'=>'El autor es obligatorio',
            'editorial.required'=>'La editorial es obligatorio',
            'contenido.required'=>'El contenido es obligatorio' 
        ];
    }
    
}
