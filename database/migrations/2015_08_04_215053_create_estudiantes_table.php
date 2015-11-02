<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudiantes', function(Blueprint $table)
		{


			
		$table->increments('id');
		$table->integer('carreras_id')->unsigned();
		$table->integer('rut')->unique();
		$table->string('nombres',255);
		$table->string('apellidos',255);
		$table->string('email',255);
		$table->timestamp('created_at');
		$table->timestamp('update_at');

		$table->foreign('carreras_id')
		->references('id')->on ('carreras')
		->onUpdate('CASCADE')
		->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudiantes');
	}
}