<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
	    $table->bigIncrements('id');
		$table->integer('rut')->unique();
		$table->string('nombre',255);
		$table->string('apellido',255);
		$table->string('direccion',255);
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
		Schema::drop('clientes');
	}

}
