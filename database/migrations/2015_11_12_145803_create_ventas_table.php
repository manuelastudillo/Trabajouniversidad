<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventas', function(Blueprint $table)
		{
	    $table->bigIncrements('id');
		$table->date('fecha');
		$table->bigInteger('monto_inicial');
		$table->bigInteger('monto_final');
		$table->bigInteger('total_venta');
		$table->bigInteger('numero_ventas');
		$table->string('estado');
		$table->timestamp('created_at');
		$table->timestamp('update_at');
		$table->bigInteger('producto_id')->unsigned();
		$table->bigInteger('personal_id')->unsigned();
		$table->bigInteger('cliente_id')->unsigned();
	
	    $table->foreign('producto_id')
		->references('id')->on ('productos')
		->onUpdate('CASCADE')
		->onDelete('CASCADE');

        $table->foreign('personal_id')
		->references('id')->on ('personals')
		->onUpdate('CASCADE')
		->onDelete('CASCADE');

	    $table->foreign('cliente_id')
		->references('id')->on ('clientes')
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
		Schema::drop('ventas');
	}

}


