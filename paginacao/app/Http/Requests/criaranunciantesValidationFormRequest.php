<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class criaranunciantesValidationFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
                        'name' => 'required|string|min:3|max:190',
                        'email' => 'required|string|email|max:255|unique:users',
                        'password' => 'required|string|min:2|confirmed',
                        'telefone'   => 'required|numeric|digits_between:4,32',
                        'idade'  =>  'required|numeric|digits_between:2,2',
                        'sexo'       =>  'required|string|max:100',
                        'cep'      =>   'required|numeric|digits_between:8,8',
                        'cpf'      =>   'required|numeric|digits_between:11,11',
                        'cnpj'      =>   'required|numeric|digits_between:11,14',
                        'MEI'         =>     'required|string|max:3',
                        'endereco'   =>     'required|string|min:6|max:191',
                        'complemento' =>     'required|min:3|max:50',
                        'aboutMe' =>          'required|min:10|max:191',
                        'exp' =>               'required|min:3|max:170',
                        'diplomaCertificado'  =>   'max:255'

        ];

         $mensagens = [

                    'name.required' => 'O campo "nome" é obrigatório',
                    'name.max' => 'O campo "nome" só pode aceitar no máximo 191 caracteres',
                    'titulo' => 'O campo "titulo" só pode aceitar no máximo 191 caracteres',
                    'titulo.min' => 'O campo "titulo" tem q ter 100000000000',
                    'titulo.max' => 'Este número de telefone está fora dos padrões',
                    'comentario' => 'O campo "comentario" só pode aceitar no máximo 191 caracteres',
                    'comentario.min' => 'O campo "comentario" não pode ser nulo',
                    'comentario.min' => 'O campo "comentario" não pode ser nulo',
                    'aboutMe.max' => 'O campo "Sobre Mim" só pode aceitar no máximo 191 caracteres',
                    'exp.max' => 'O campo "Experiências" só pode aceitar no máximo 170 caracteres',
                    'email.required' => 'O campo "email" é obrigatório',
                    'email.required' => 'O campo "email" é obrigatório',
                    'cpf.digits_between'=> 'o numero pode ter no máximo 11 digitos',

                    'telefone.digits_between'=> 'o numero pode ter no máximo 11 digitos',

                    'cep.digits_between'=> 'o numero pode ter no máximo 11 digitos',

                    'complemento.max'=> 'O complemento deve ter  no máximo 50 caracteres ',
                    'complemento.min'=> 'O complemento deve ter  no mínimo 3  caracteres',


                    'endereco.min'=> 'O endereço deve ter no mínimo 6 caracteres.',


                    'name.required' => 'O campo "nome" é obrigatório',
                    'name.min' => 'O nome deve conter no mínimo 3 caracateres',
                    'name.max' => 'O campo "nome" só pode aceitar no máximo 191 caracteres',

                    'idade.digits_between'=> 'aaaaaaaaaaaaa',
                    'idade.required'=> 'Por favor, informe sua  idade real.',
                    'idade.numeric'=> 'Este campo aceita apenas números',


                    'telefone.digits_between'=> 'Telefone inválido. Favor informar um com ao menos 6 caracteres',
                    'telefone.numeric'=> 'Este campo aceita apenas números',


                    'password.required' => 'O campo "password" é obrigatório',
                    'password.min' => 'O campo "password" deve conter no mínimo 2 digitos',
                    'password.confirmed' => 'A senha não foi conferida ou as mesmas não são iguais',


                    'cep.digits_between'=> 'Digite um CEP Válido',
                    'cep.numeric'=> 'Este campo aceita apenas números',

                    'cp31111111f.digits_between'=> 'Digite um CPF Válido',
                    'cpf.numeric'=> 'Este campo aceita apenas números',

                    'cnpj.digits_between'=> 'Digite um CNPJ Válido',
                    'cnpj.numeric'=> 'Este campo aceita apenas números',
                    'endereco.min'=> 'O endereço deve ter no mínimo 6 caracteres.',


                    'complemento.max'=> 'O complemento deve ter  no máximo 50 caracteres ',
                    'complemento.min'=> 'O complemento deve ter  no mínimo 3  caracteres',


                    'aboutMe.min'=> 'Curto demais....Fale mais sobre você !.',
                    'aboutMe.max'=> 'Pronto! Você tem apenas 130 caracteres para se descrever .',

                    'exp.min'=> 'Curto demais....Fale mais sobre suas experiências !.',
                    'exp.max'=> 'Pronto! Você tem apenas 170 caracteres para descrever suas experiências .',



        ];

    }
}
