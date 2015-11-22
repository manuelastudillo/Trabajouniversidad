<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateClienteRequest extends Request {

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
			'direccion' => 'required|min:3',
		];
	}

}
