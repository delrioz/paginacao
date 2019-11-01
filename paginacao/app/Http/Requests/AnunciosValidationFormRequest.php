<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnunciosValidationFormRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [   
          
            'image' =>    'image|',
            'titulo' =>    'required|string|min:6|max:130',
            'categoria' =>    'required',
            'endereco' =>    'required|string|min:5|max:191',
            'complemento' =>     'required|string|min:3|max:50',
            'municipio' =>    'required|string|min:3|max:125',
            'cep'        =>   'required|numeric|digits_between:8,8',    
            'UF' =>    'required|string|min:2|max:32',
            'mei' =>    'required',
            'bairro' =>    'required|string|min:3|max:45',
            'sobre' =>    'required|string|min:3|max:320',

        ];
    
    }

    public function messages()
    {
        return[

          'image.required' => 'O campo imagem é de preenchimento obrigatório!',
          'image.image' => 'Insira uma imagem válida.',
          'image.max' => 'Insira uma imagem válida.',


          'titulo.required' => 'O campo titulo é de preenchimento obrigatório!',
          'titulo.max' => 'O campo titulo pode ter no máximo 130 caracteres!',
          'titulo.min' => 'O campo titulo deve ter no mínimo 6 caracteres!',

          'titulo.string' => 'O campo titulo tem que ser uma string!',


          'categoria.required' => 'O campo categoria é de preenchimento obrigatório!',

          'complemento.max' => 'O campo complemento só aceita no máximo 50 caracteres!',
          'complemento.string' => 'Insira um complemento Válido',
          'complemento.min' => 'O campo categoria deve ter no mínimo 3 caracteres!',


          'endereco.string' => 'Insira um endereço válido',
          'endereco.max' => 'O endereço deve conter no máximo 191 caracteres',
          'endereco.min' => 'O endereço deve conter no mínimo 5 caracteres',
          'endereco.required' => 'O endereço é obrigatório',


          'complemento.required' => 'O campo complemento é de preenchimento obrigatório!',


          'complemento.string' => 'Insira um complemento Válido',
          'complemento.digits_between' => 'Insira um complemento válido',




          'municipio.required' => 'O campo municipio é de preenchimento obrigatório!',
          'municipio.min' => 'O campo municipio  deve conter no mínimo 3 caracteres!',
          'municipio.max' => 'O campo municipio  deve conter no máximo 125 caracteres!',
          'municipio.string' => 'O campo municipio  deve ser uma string!',


          'cep.digits_between' => 'Insira um cep válido',
          'cep.numeric' => 'Insira um cep válido',


          'cep.required' => 'O campo CEP é de preenchimento obrigatório!',


          'UF.required' => 'O campo "UF "é de preenchimento obrigatório!',
          'UF.min' => 'O campo UF  deve conter no mínimo 2 caracteres!',
          'UF.max' => 'O campo UF  deve conter no máximo 32 caracteres!',

          'mei.required' => 'O campo MEI é obrigatório',



          'bairro.required' => 'O "bairro"  é de preenchimento obrigatório!',
          'bairro.string' => 'O "bairro"  deve ser uma string!',
          'bairro.min' => 'O campo bairro  deve conter no mínimo 2 caracteres!',
          'bairro.max' => 'O campo bairro  deve conter no máximo 32 caracteres!',


          'sobre.required' => 'O campo "sobre" é de preenchimento obrigatório!',
          'sobre.min' => 'O campo sobre  deve conter no mínimo 3 caracteres!',
          'sobre.max' => 'O campo sobre  deve conter no máximo 220 caracteres!',


        ];
    }

}
