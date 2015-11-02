<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carreras', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('escuela_id')->unsigned();
		$table->integer('codigo')->unique();
		$table->string('nombres',255)->unique();
        $table->string('descripcion')->nullable();
		$table->timestamp('created_at');
		$table->timestamp('update_at');

		$table->foreign('escuela_id')
		->references('id')->on ('escuelas')
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
		Schema::drop('carreras');
	}

}