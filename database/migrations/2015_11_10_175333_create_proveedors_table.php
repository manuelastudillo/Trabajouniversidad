<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedors', function(Blueprint $table)
		{
	    $table->bigIncrements('id');
		$table->string('nombre',255);
		$table->string('representante',255);
		$table->bigInteger('rut')->unique();
		$table->string('direccion',255);
		$table->bigInteger('telefono');
		$table->string('web',255);
		$table->string('email',255);
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
		Schema::drop('proveedors');
	}

}
