<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos', function(Blueprint $table)
		{
		$table->bigIncrements('id');
		$table->bigInteger('asignaturas_id')->unsigned();
		$table->integer('docentes_id')->unsigned();
		$table->integer('semestre')->unique();
		$table->integer('ano')->unique();
		$table->integer('seccion')->unique();
		$table->timestamp('created_at');
		$table->timestamp('update_at');

		$table->foreign('asignaturas_id')
		->references('id')->on ('asignaturas')
		->onUpdate('CASCADE')
		->onDelete('CASCADE');
         
         $table->foreign('docentes_id')
		->references('id')->on ('docentes')
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
		Schema::drop('cursos');
	}

}