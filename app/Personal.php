<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model {

	protected $table = "personals";

	public $timestamps = false;

	protected $filable=["rut","nombre","apellido"];

}
