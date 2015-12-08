<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

	protected $table = "proveedors";

	public $timestamps = false;

	protected $fillable=["nombre","representante","rut","direccion","telefono","web","email"];
	protected $hidden = ['created_at', 'updated_at'];


}
