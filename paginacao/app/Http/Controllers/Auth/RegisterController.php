<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AnunciosValidationFormRequest;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    // protected $redirectTo = '/paineladmvendedor';

    protected $redirectTo = '/painelvendedor';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data )
    {
        $messages = [
            'name.required' => 'O campo "nome" é obrigatório',
            'name.min' => 'O nome deve conter no mínimo 3 caracateres',

            'name.max' => 'O campo "nome" só pode aceitar no máximo 191 caracteres',
            'titulo' => 'O campo "titulo" só pode aceitar no máximo 191 caracteres',
            'titulo.min' => 'O campo "titulo" tem q ter 100000000000',
            'titulo.max' => 'Este número de telefone está fora dos padrões',
            'comentario' => 'O campo "comentario" só pode aceitar no máximo 191 caracteres',
            'comentario.min' => 'O campo "comentario" não pode ser nulo',
            'comentario.min' => 'O campo "comentario" não pode ser nulo',
            'aboutMe.max' => 'O campo "Sobre Mim" só pode aceitar no máximo 191 caracteres',
            'exp.max' => 'O campo "Experiências" só pode aceitar no máximo 130 caracteres',
            'email.required' => 'O campo "email" é obrigatório',
            'email.required' => 'O campo "email" é obrigatório',
            'cpf.digits_between'=> 'Digite um CPF Válido',
            'cpf.numeric'=> 'Este campo aceita apenas números',


            'cep.digits_between'=> 'Digite um CEP Válido',
            'cep.numeric'=> 'Este campo aceita apenas números',


            'cnpj.digits_between'=> 'Digite um CNPJ Válido',
            'cnpj.numeric'=> 'Este campo aceita apenas números',

            'complemento.max'=> 'O complemento deve ter  no máximo 50 caracteres ',
            'complemento.min'=> 'O complemento deve ter  no mínimo 3  caracteres',



            'idade.digits_between'=> 'Por favor, informe sua  idade real.',
            'idade.required'=> 'Por favor, informe sua  idade real.',
            'idade.numeric'=> 'Este campo aceita apenas números',


            'endereco.min'=> 'O endereço deve ter no mínimo 6 caracteres.',

            'telefone.digits_between'=> 'Telefone inválido. Favor informar um com ao menos 6 caracteres',
            'telefone.numeric'=> 'Este campo aceita apenas números',

            'aboutMe.min'=> 'Curto demais....Fale mais sobre você !.',
            'aboutMe.max'=> 'Pronto! Você tem apenas 130 caracteres para se descrever .',

            'exp.min'=> 'Curto demais....Fale mais sobre suas experiências !.',
            'exp.max'=> 'Pronto! Você tem apenas 170 caracteres para descrever suas experiências .',


            'password.required' => 'O campo "password" é obrigatório',
            'password.min' => 'O campo "password" deve conter no mínimo 2 digitos',
            'password.confirmed' => 'A senha não foi conferida ou as mesmas não são iguais',

              'email.unique' =>   'Este email já esta sendo utilizado por outro usuário',


        ];

        $result = Validator::make($data, [
            'name' => ['required', 'string', 'min:3','max:190'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],
            'telefone'   => ['required','numeric','digits_between:4,32'],
            'idade'  =>  ['required','numeric','digits_between:2,2'],
            'sexo' => ['required', 'string', 'max:100' ],
            'cep'  => ['required','numeric','digits_between:8,8'],
            'cpf'  => ['required','numeric','digits_between:11,11'],
            'cnpj' => ['required','numeric','digits_between:14,14'],
            'MEI' => ['required','max:3'],
            'endereco' => ['required','min:6','max:191'],
            'complemento' => ['required','min:3','max:50'],
            'aboutMe' => ['required','min:10','max:191'],
            'exp' => ['required','min:3','max:170'],
            'diplomaCertificado' => ['required','max:255'],

        ],$messages);





        return $result;

    }




    protected function create(array $data)
    {
        // $path =  $data->file('arquivo')->store('imagens','public');
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'telefone' => $data['telefone'],
            'idade' => $data['idade'],
            'sexo' => $data['sexo'],
            'cep' => $data['cep'],
            'cpf' => $data['cpf'],
            'cnpj' => $data['cnpj'],
            'MEI' => $data['MEI'],
            'endereco' => $data['endereco'],
            'complemento' => $data['cnpj'],
            'aboutMe' => $data['aboutMe'],
            'exp' => $data['exp'],
            'image' => $data['image'],
            'diplomaCertificado' => $data['diplomaCertificado'],

        ]);
    }


}
