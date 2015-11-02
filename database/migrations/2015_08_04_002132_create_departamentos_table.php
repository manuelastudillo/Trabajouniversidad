<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departamentos', function(Blueprint $table)
		{
		$table->increments('id');
		$table->string('nombre',255)->unique();
	    $table->integer('facultades_id')->unsigned();
        $table->string('descripcion')->nullable();
		$table->timestamp('created_at');
		$table->timestamp('update_at');

		$table->foreign('facultades_id')
		->references('id')->on ('facultades')
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
		Schema::drop('departamentos');
	}

}