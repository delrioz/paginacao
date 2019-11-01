<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblComentarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_comentario', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('titulo', 125)->nullable();
			$table->string('comentario', 250);
			$table->integer('cadastroUsuario_id')->unsigned()->index('cadastroUsuario_id');
			$table->integer('post_id')->unsigned()->index('post_id');
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_comentario');
	}

}
