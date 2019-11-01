<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgrvaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agrvai', function(Blueprint $table)
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
		Schema::drop('agrvai');
	}

}
