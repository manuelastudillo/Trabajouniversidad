<?php namespace App;

use Illuminate\Database\Eloquent\Model;



class Personal extends Model {


	protected $table = "personals";

	public $timestamps = false;

	protected $filable=["rut","nombre","apellido","sexo","estado_civil","fecha_nacimiento","usuario_mail","password","sueldo","telefono","direcion","cargo"];

	protected $hidden= ['password','remember_token'];

	public function setPasswordAttribute($valor){
          if(!empty($valor)){
          	$this->attributes['password']=\Hash::make($valor);
          	          }


	}

}
