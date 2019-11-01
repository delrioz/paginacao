<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@outlook.com',
            'idade' => '3',
            'sexo' => '2',
            'cep' => '2',
            'cpf' => '1',
            'cnpj' => '3',
            'MEI' => 's',
            'endereco' => '24',
            'complemento' => '24524',
            'aboutMe' => '32',
            'exp' => 's',
            'imagem' => 'imagem',
            'diplomaCertificado' => '362525',

            'password' => Hash::make('adm123'),

        ]);
        
    }
}
