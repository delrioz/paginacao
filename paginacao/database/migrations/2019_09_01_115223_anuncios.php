<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Anuncios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anuncios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('imagem', 125);
			$table->string('titulo', 100);
			$table->string('categoria', 120);
			$table->string('endereco', 120);
			$table->string('complemento', 21);
			$table->string('municipio', 125);
			$table->string('cep', 21);
			$table->string('UF', 32);
			$table->string('bairro', 45);
			$table->string('mei', 14);
			$table->integer('users_id')->unsigned();
			$table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
			$table->text('sobre', 65535)->nullable();
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
		Schema::drop('anuncios');
	}

}
