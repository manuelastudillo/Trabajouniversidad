<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Personal;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePersonalRequest;
class RegistroPersonalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$personals = Personal::orderBy('nombre','asc')->paginate(15);
		
		return view('registropersonal.index')->with('personals',$personals);
}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	return view('registropersonal.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store(CreatePersonalRequest $request)
	{
		//dd($request->all());
	//	dd($request->all());
		$personal = new Personal();
		$personal->rut =  $request->input('rut');
	    $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->sexo = $request->input('sexo');
	    $personal->estado_civil = $request->input('estado_civil');
        $personal->fecha_nacimiento = $request->input('fecha_nacimiento');
        $personal->usuario_mail = $request->input('usuario_mail');
	    $personal->password = $request->input('password');
        $personal->sueldo = $request->input('sueldo');
        $personal->telefono = $request->input('telefono');
	    $personal->direccion = $request->input('direccion');
        $personal->cargo = $request->input('cargo');

		//$personal->nombre
		//dd($request->all());
		//$dato=$request->only()
		//$personal = Personal::create($request->all());
		$personal->save();
		dd("creado");

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
