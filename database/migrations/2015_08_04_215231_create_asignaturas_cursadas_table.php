<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasCursadasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignaturas_cursadas', function(Blueprint $table)
		{
		$table->bigIncrements('id');
		$table->bigInteger('curso_id')->unsigned();
		$table->bigInteger('estudiante_id')->unsigned();
		$table->timestamp('created_at');
		$table->timestamp('update_at');

	    $table->foreign('curso_id')
		->references('id')->on ('cursos')
		->onUpdate('CASCADE')
		->onDelete('CASCADE');

        $table->foreign('estudiante_id')
		->references('id')->on ('estudiantes')
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
		Schema::drop('asignaturas_cursadas');
	}

}
