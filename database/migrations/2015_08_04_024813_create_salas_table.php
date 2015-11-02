<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salas', function(Blueprint $table)
		{
	    $table->bigIncrements('id');
		$table->integer('campus_id')->unsigned();
		$table->integer('tipo_sala_id')->unsigned();
		$table->string('nombre',255)->unique();
		$table->string('descripcion')->nullable();
		$table->timestamp('created_at');
		$table->timestamp('update_at');

		$table->foreign('campus_id')
		->references('id')->on ('campus')
		->onUpdate('CASCADE')
		->onDelete('CASCADE');
         
         $table->foreign('tipo_sala_id')
		->references('id')->on ('tipos_salas')
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
		Schema::drop('salas');
	}

}
