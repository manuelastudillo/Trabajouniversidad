<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('rut')->unique();
			$table->string('nombre',255);
		    $table->string('apellido',255);
		    $table->string('sexo',255);
		    $table->string('estado_civil',255);
		    $table->integer('fecha_nacimiento');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('sueldo');
		    $table->integer('telefono');
		    $table->string('direccion',255);
		    $table->string('cargo',255);
	

			$table->rememberToken();
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
		Schema::drop('users');
	}

}
