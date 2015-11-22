<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProveedorRequest extends Request {

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
			
			'nombre'=> 'required|min:3',
			'representante'=> 'required|min:3',
			'rut'=> 'required|min:7|unique:proveedors,rut',
			'direccion' => 'required|min:3',
			'telefono'=> 'required',
			'web'=> 'required',
			'email'=> 'required',
				
		];
	}

}
