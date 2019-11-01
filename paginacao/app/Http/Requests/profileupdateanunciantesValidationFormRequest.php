<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profileupdateanunciantesValidationFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

                          'email'      =>   'max:191|email',
                          'password'   =>   'confirmed|max:191',
                          'telefone'   =>   'numeric|min:6|digits_between:1,71',
                          'cep'        =>   'numeric|min:8|digits_between:8,8',
                          'cpf'        =>   'numeric|min:8|digits_between:1,11',
                          'cnpj'        =>   'numeric|min:8|digits_between:1,14',
                          'idade'        =>   'numeric|digits_between:2,2',
                          'endereco' =>    'required|string|min:5|max:191',
                          'complemento' =>     'required|string|min:3|max:50',
                          'aboutMe'     =>     'string|required|min:10|max:191'  ,
                          'exp'          =>    'string|min:6|max:170',
                          'image' => 'sometimes|file|image|dimensions:min_width=300px,min_height=300px',
                          'diplomaCertificado'  =>   'file|mimes:pdf|max:10000'

        ];


    }


    public function messages()
    {
        return[

        //   'image.required' => 'O campo imagem é de preenchimento obrigatório!',
          'email.required' => 'O campo email é de preenchimento obrigatório!',
          'email.unique' => 'Este e-mail já está sendo utilizado por outro usuário',
          'email.max' => 'Seu e-mail não pode ter mais de 191 caracteres',
          'email.email' => 'Insira um email válido',

          'telefone.numeric' => 'Insira um telefone válido',
          'telefone.min' => 'Insira um telefone válido',
          'telefone.digits_between' => 'Insira um telefone válido',

          'cep.digits_between' => 'Insira um cep válido',
          'cep.numeric' => 'Insira um cep válido',

          'cep.min' => 'Insira um cep válido',


          'cpf.numeric' => 'Insira um cpf válido',
          'cpf.digits_between' => 'Insira um cpf válido',
          'cpf.min' => 'Insira um cpf válido',


          'cnpj.numeric' => 'Insira um cnpj válido',
          'cnpj.digits_between' => 'Insira um cnpj válido',
          'cnpj.min' => 'Insira um cnpj válido',



          'idade.digits_between' => 'Insira uma idade válida',



          'complemento.min' => 'O campo complemento deve ter no mínimo 3 caracteres!',

          'complemento.required' => 'O campo complemento é de preenchimento obrigatório!',


          'complemento.string' => 'Insira um complemento Válido',
          'complemento.max' => 'Insira um complemento válido',



          'aboutMe.required' => 'O campo Sobre Mim é de preenchimento obrigatório!',
          'aboutMe.min' => 'O campo Sobre Mim tem que ter no mínimo 10 caracteres!',
          'exp.required' => 'O campo Experiências é de preenchimento obrigatório!',
          'exp.max' => 'O campo Experiências aceita no máximo 170 caracteres!',
          'exp.string' => 'O campo Experiências deve ser uma string',
          'exp.min' => 'O campo Experiências tem que ter no mínimo 6 caracteres!',

          'aboutMe.max' => 'O campo Sobre Mim aceita no máximo 130 caracteres!',
          'aboutMe.required' => 'O campo Sobre Mim é obrigatório',
          'aboutMe.string' => 'O campo Sobre Mim deve ser uma string',

          'password.max' => 'A senha é longa demais',




          'image.image' => 'O campo imagem aceita apenas imagens válidas',



          'endereco.string' => 'Insira um endereço válido',
          'endereco.max' => 'O endereço deve conter no máximo 191 caracteres',
          'endereco.min' => 'O endereço deve conter no mínimo 5 caracteres',
          'endereco.required' => 'O endereço é obrigatório',


          'cpf.digits_between' => 'Insira um cpf válido',
          'cpf.numeric' => 'Insira um cpf válido',


          'cnpj.digits_between' => 'Insira um cnpj válido',
          'cnpj.numeric' => 'Insira um cnpj válido',

          'password.confirmed' => 'As senhas não conferem ',
          'password.confirmed' => 'As senhas não conferem ',

          'image.dimensions' => 'O campo imagem deve conter uma largura de 300px
          e uma altura de 330px',

          'diplomaCertificado.mimes' => 'Este campo aceita apenas arquivos PDF para o seu diploma e/ou certificado'


        ];
    }
}
