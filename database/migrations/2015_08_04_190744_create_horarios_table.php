<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('horarios', function(Blueprint $table)
		{
	    $table->bigIncrements('id');
		$table->date('fecha')->unique();
		$table->bigInteger('sala_id')->unsigned();
		$table->bigInteger('periodo_id')->unsigned();
		$table->bigInteger('curso_id')->unsigned();
	
	    $table->foreign('curso_id')
		->references('id')->on ('cursos')
		->onUpdate('CASCADE')
		->onDelete('CASCADE');

        $table->foreign('sala_id')
		->references('id')->on ('salas')
		->onUpdate('CASCADE')
		->onDelete('CASCADE');

	    $table->foreign('periodo_id')
		->references('id')->on ('periodos')
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
		Schema::drop('horarios');
	}

}
