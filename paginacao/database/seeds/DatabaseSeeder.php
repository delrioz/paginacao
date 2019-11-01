<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  $this->call(UsersTableSeeder::class);

        //  // inserindo dados automaticamente, no caso um user admin


        // DB::table('users')->insert([
        //     'name' => 'Giovani da 14',
        //     'email' => 'gdelrio@users524.com',
        //     'idade' => '33',
        //     'sexo' => 'Masculino',
        //     'cep' => '31170024',
        //     'cpf' => '54',
        //     'cnpj' => '26256262',
        //     'MEI' => 'Sim',
        //     'endereco' => 'av cristiano machado',
        //     'complemento' => '1780',
        //     'aboutMe' => 'dsadsadsadasdas',
        //     'telefone' => '5155',
        //     'exp' => 'dasdsadasdsadsadasdsadass',
        //     'image' => 'image',
        //     'diplomaCertificado' => '362525',

        //     'password' => Hash::make('adm123'),

        // ]);




        // DB::table('clientes')->insert([
        //     'name' => 'Gio Clientes',
        //     'email' => 'gdelrio@clientes.com.net',
        //     'password' => Hash::make('adm1234'),
        //     'image' => 'perfil.png',

        // ]);


        
        DB::table('admins')->insert([
            'name' => 'Giovani',
            'email' => 'giovani@devstack.com',
            'password' => Hash::make('adm123'),
        
        ]);

        


    }
}
