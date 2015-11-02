<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignaturas', function(Blueprint $table)
		{
		$table->bigIncrements('id');
		$table->integer('departamentos_id')->unsigned();
		$table->string('codigo',255)->unique();
		$table->string('nombres',255);
        $table->string('descripcion')->nullable();
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
		Schema::drop('asignaturas');
	}

}