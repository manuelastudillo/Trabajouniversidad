<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('escuelas', function(Blueprint $table)
		{
		$table->increments('id');
		$table->string('nombre',255)->unique();
	    $table->integer('departamentos_id')->unsigned();
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
		Schema::drop('escuelas');
	}

}