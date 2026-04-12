<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'nombre' => 'required|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable',
            'tipo_proyecto' => 'required',
            'mensaje' => 'required',            
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'email.required' => 'El correo electronico es obligatorio',
            'email.email' => 'El correo electronico debe ser valido',
            'tipo_proyecto.required' => 'El tipo de proyecto es requerido',
            'mensaje.required' => 'El mensaje es requerido'
        ];
    }
}

