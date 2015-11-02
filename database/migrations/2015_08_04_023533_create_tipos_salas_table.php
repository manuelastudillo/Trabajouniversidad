<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposSalasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipos_salas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',255)->unique();
			$table->string('descripcion')->nullable();
			$table->timestamp('created_at');
			$table->timestamp('update_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipos_salas');
	}

}