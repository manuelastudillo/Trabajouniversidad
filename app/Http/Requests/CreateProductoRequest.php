<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductoRequest extends Request {

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
        'principio_activo'=> 'required|min:3',
        'laboratorio'=> 'required|min:3',
	    'linea'=> 'required|min:3',
        'codigo_barras'=> 'required|min:3',
        'categoria'=> 'required|min:3',
	    'comision'=> 'required|min:3',
	    'stock'=> 'required|min:3',
        'stockminimo'=> 'required|min:3',
	    'precio_compra'=> 'required|min:3',
        'descuento'=> 'required|min:3',
        'proveedor_id'=> 'required',
		];
	}

}
