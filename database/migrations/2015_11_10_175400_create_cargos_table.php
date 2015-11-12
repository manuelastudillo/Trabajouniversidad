<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargos', function(Blueprint $table)
		{
	    $table->bigIncrements('id');
		$table->integer('rut')->unique();
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
		Schema::drop('cargos');
	}

}
