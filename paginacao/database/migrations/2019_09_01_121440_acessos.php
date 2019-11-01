<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class acessos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acessos', function(Blueprint $table)
		{
			$table->string('nome');
			$table->string('access', 125);
			$table->string('idDoAnuncio', 75);
			$table->string('users_id', 32);
			$table->string('nomeAnunciante', 280);
			$table->string('idDoUser', 200);
			$table->string('idade', 32);
			$table->string('sexo', 32);
			$table->string('cpf', 32);
			$table->string('cnpj', 32);
			$table->string('cep', 32);
			$table->string('MEI', 32);
			$table->string('endereco', 32);
			$table->string('complemento', 40);
			$table->string('email', 280);
			$table->string('telefone', 75);
			$table->text('aboutMe', 65535);
			$table->text('exp', 65535);
			$table->string('image', 275);
			$table->string('diplomaCertificado', 375);
			$table->string('idDeQuemAcessa', 32);
			$table->string('NomeDeQuemAcessa', 275);
			$table->string('categoria');

			$table->integer('anuncioId')->unsigned();
			$table->foreign('anuncioId')->references('id')->on('anuncios')->onDelete('cascade');

			$table->string('tituloAnuncio', 300);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acessos');
	}

}
