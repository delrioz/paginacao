<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class criandoclientesValidationFormRequest extends FormRequest
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
                    'name'  => 'required|min:2|max:191',
                    'email' => 'required|min:2|max: 191|email|unique:clientes',
                    'image' => '|image',
                    'password' =>  '|required|confirmed'
        ];
}

    public function messages()
    {
        return[

          'name.max' => 'O campo nome pode ter no máximo 191 caratcteres', 
          'email.required' => 'O campo email é de preenchimento obrigatório!',
          'email.max' => 'O campo email pode ter no máximo 191 caratcteres',
          'image.image' => 'Favor anexar uma imagem válida ao campo imagem.',
          'image.required' => 'O campo imagem é obrigatório',
  



        ];
    }

}
