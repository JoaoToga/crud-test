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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $userId = $this->route('user');

        return [
            'name' => 'required',   #deixa o campo obrigatorio
            'email' => 'required|email|unique:users,email,' . ($userId ? $userId->id : null),   #deixa o campo obrigatorio
            'password' => 'required|min:3'  #deixa o campo obrigatorio e com no minino 3 carcter
        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'Campo NOME Obrigatorio',
            'email.required' => 'Campo EMAIL Obrigatorio',
            'email.email' => 'Campo EMAIL INVALIDO',  
            'email.unique' => 'Email ja Cadastrado',   
            'password.required' => 'Campo Obrigatorio',
            'password.min' => 'Pelo menos :min caracter' 
        ];
    }
}
