<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContatosclicksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contatosclicks', function(Blueprint $table)
		{
			$table->bigInteger('QtAcessos')->nullable();
			$table->string('tituloAnuncio', 300)->nullable();
			$table->string('users_id', 32)->nullable();
			$table->string('categoria')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contatosclicks');
	}

}
