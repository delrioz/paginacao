<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWhoavaliaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('whoavalia', function(Blueprint $table)
		{
			$table->integer('idDeQuemComenta')->unsigned()->nullable();
			$table->string('name', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->integer('id')->unsigned()->nullable();
			$table->string('titulo', 191)->nullable();
			$table->string('comentario', 191)->nullable();
			$table->integer('users_id')->nullable();
			$table->string('clientes_id', 85)->nullable();
			$table->string('anuncios_id', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('whoavalia');
	}

}
