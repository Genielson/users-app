<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:1',
            'email'=>'required|min:10',
            'password'=>'required|min:5'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Nome de usuario é obrigatório',
            'email.required' => 'Um email é obrigatório',
            'password.required' => ' Senha é obrigatória ',
            'name.min' => ' O nome deve ter no minimo 1 caractere',
            'email.min' => ' O email deve ter no minimo 10 caracteres',
            'password.min' => 'A senha deve ter no minimo 5 caracteres'
        ];
    }
}
