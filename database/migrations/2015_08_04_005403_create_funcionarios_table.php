<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('departamentos_id')->unsigned();
		$table->integer('rut')->unique();
		$table->string('nombres',255);
		$table->string('apellidos',255);
		$table->timestamp('created_at');
		$table->timestamp('update_at');

		$table->foreign('departamentos_id')
		->references('id')->on ('departamentos')
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
		Schema::drop('funcionarios');
	}

}