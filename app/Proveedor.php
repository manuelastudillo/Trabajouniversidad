<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

	protected $table = "proveedors";

	public $timestamps = false;

	protected $filable=["nombre","representante","rut","direccion","telefono","web","email"];

}
