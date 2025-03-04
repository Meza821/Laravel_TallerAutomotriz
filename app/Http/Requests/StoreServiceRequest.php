<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
         // Retorna true si deseas que cualquier usuario
        // pueda usar este Form Request. Si implementas politicas,
        // podrías verificar permisos aquí.
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
            'nombre'=>'required|string|max:100',
            'descripcion'=>'required|string',
            'precio'=> 'required|numeric|min:0',
        ];
    }

    public function messages(){
        return[
            'nombre.required' => 'El nombre del servicio es obligatorio.',
            'nombre.max' => 'El nombre no puede superar los 100 caracteres',
            'precio.required' => 'El precio es obligatorio.',
            'precio.numeric' => 'No se permiten caracteres especiales, solo números.',
            'precio.min' => 'El precio no puede ser negativo',
        ];        

    }
}
