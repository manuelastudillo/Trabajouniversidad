<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePersonalRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'rut'=> 'required|min:7|unique:clientes,rut',
			'nombre'=> 'required|min:3',
			'apellido'=> 'required|min:3',
			'sexo' => 'required|min:3',
			'estado_civil'=> 'required',
			'fecha_nacimiento'=> 'required',
			'usuario_mail'=> 'required|min:7|unique:personals,usuario_mail',
			 'password'=> 'required',
            'sueldo'=> 'required',
			'telefono'=> 'required',
			'direccion'=> 'required',
			'cargo' => 'required',		
		];
	}

}
