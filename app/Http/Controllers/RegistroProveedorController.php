<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proveedor;
use Session;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProveedorRequest;

class RegistroProveedorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proveedors = Proveedor::orderBy('nombre','asc')->paginate(15);
		
		return view('registroproveedor.index')->with('proveedors',$proveedors);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	return view('registroproveedor.create');	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProveedorRequest $request)
	{
		//dd($request->all());
		$proveedor = new Proveedor();
	    $proveedor->nombre = $request->input('nombre');
        $proveedor->representante = $request->input('representante');
        $proveedor->rut = $request->input('rut');
	    $proveedor->direccion = $request->input('direccion');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->web = $request->input('web');
	    $proveedor->email = $request->input('email');

		//$personal->nombre
		//dd($request->all());
		//$dato=$request->only()
		//$personal = Personal::create($request->all());
	 	$proveedor->save();
         return redirect()->route('registroproveedor.index');
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
		$proveedor= Proveedor::findOrFail($id);
		return view('registroproveedor.edit',compact('proveedor'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreateProveedorRequest $request)
  {
        $proveedor = Proveedor::find($id);
        $proveedor->fill($request->all());
        $proveedor->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return redirect()->route('registroproveedor.index');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Proveedor::destroy($id);
        Session::flash('message','Usuario Actualizado Correctamente');
        return redirect()->route('registroproveedor.index');
	}


}
