<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('periodos', function(Blueprint $table)
		{
	        $table->bigIncrements('id');
	        $table->integer('numero')->unique();
	        $table->string('bloque',255)->unique();
			$table->time('inicio')->unique();
			$table->time('fin')->unique();
			$table->timestamp('created_at');
			$table->timestamp('update_at');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('periodos');
	}

}