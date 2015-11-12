
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
	    $table->bigIncrements('id');
		$table->string('nombre',255);
		$table->string('principio_activo',255);
		$table->string('laboratorio',255);
		$table->string('linea',255);
		$table->string('codigo_barras',255);
		$table->string('categoria',255);
		$table->integer('comision');
		$table->integer('stock');
		$table->integer('stockminimo');
		$table->integer('precio_compra');
		$table->integer('precio_venta');
		$table->integer('descuento');
		$table->timestamp('created_at');
		$table->timestamp('update_at');
		$table->bigInteger('proveedor_id')->unsigned();

	    $table->foreign('proveedor_id')
		->references('id')->on ('proveedors')
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
		Schema::drop('productos');
	}

}
