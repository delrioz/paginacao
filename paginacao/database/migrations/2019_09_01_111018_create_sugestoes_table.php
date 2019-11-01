<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSugestoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sugestoes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('categoria', 191);
			$table->string('motivo', 191)->nullable()->default('default');
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
		Schema::drop('sugestoes');
	}

}
