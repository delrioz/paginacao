<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortifolioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portifolio', function(Blueprint $table)
		{
			$table->integer('idDoAnuncio')->unsigned()->nullable();
			$table->integer('users_id')->unsigned()->nullable();
			$table->string('name', 191)->nullable();
			$table->integer('idDoUser')->unsigned()->nullable();
			$table->integer('idade')->nullable();
			$table->string('sexo', 32)->nullable();
			$table->string('cpf', 42)->nullable();
			$table->string('cnpj', 42)->nullable();
			$table->string('cep', 42)->nullable();
			$table->string('MEI', 75)->nullable();
			$table->string('endereco', 191)->nullable();
			$table->string('complemento', 42)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('password', 191)->nullable();
			$table->string('telefone', 71)->nullable();
			$table->string('aboutMe', 191)->nullable();
			$table->string('exp', 130)->nullable();
			$table->string('image', 191)->nullable();
			$table->string('diplomaCertificado')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('portifolio');
	}

}
