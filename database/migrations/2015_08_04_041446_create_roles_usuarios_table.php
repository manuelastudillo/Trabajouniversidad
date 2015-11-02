<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles_usuarios', function(Blueprint $table)
		{
        $table->increments('id');
		$table->integer('rut')->unique();
		$table->integer('rol_id')->unsigned();
		$table->timestamp('created_at');
		$table->timestamp('update_at');

		$table->foreign('rol_id')
		->references('id')->on ('roles')
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
		Schema::drop('roles_usuarios');
	}

}