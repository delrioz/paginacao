<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profileupdateclientesValidationFormRequest extends FormRequest
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
            'name'  => 'min:2|max:191',
            'email' => 'min:2|max: 191|email|',
            'image' => 'sometimes|file|image|dimensions:min_width=300px,min_height=300px',
            'password' =>  'confirmed'
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
          'image.dimensions' => 'O campo imagem deve conter uma largura de 300px 
          e uma altura de 330px',
  



        ];
    }

}
