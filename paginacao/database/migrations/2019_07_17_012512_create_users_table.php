<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('email', 191)->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->integer('telefone');
			$table->integer('idade');
			$table->string('sexo', 32);
			$table->integer('cep');
			$table->integer('cpf');
			$table->integer('cnpj');
			$table->string('MEI', 75);
			$table->string('endereco');
			$table->integer('complemento');
			$table->string('aboutMe');
			$table->string('exp', 70);
			$table->string('image')->default('default.jpg');
			$table->integer('diplomaCertificado');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
