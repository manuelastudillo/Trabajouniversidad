<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {


	protected $table = "clientes";

	public $timestamps = false;

 	protected $fillable=["rut","nombre","apellido","direcion"];
    protected $hidden = ['created_at', 'updated_at'];
}