<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;
use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;
use App\Http\Requests\CreateClienteRequest;
class RegistroClienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$clientes = Cliente::orderBy('nombre','asc')->paginate(15);
		
		return view('registrocliente.index')->with('clientes',$clientes);

		//$clientes = Cliente::all()->paginate(15);
		//$clientes = DB::table('clientes')->paginate(10);
		//return view('registrocliente.index')->with('clientes',$clientes);
	}

	/**
	 * Show the form for creating a new resource.
	 *tercero.index',compact()
	 * @return Response
	 */
	public function create()
	{
	return view('registrocliente.create');	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateClienteRequest $request)
	{
      // 		$clientes = Cliente::create($request->all());

      //  return redirect('registrocliente');
      

		//dd($request->all());
		$cliente = new Cliente();
		$cliente->rut =  $request->input('rut');
	    $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
	    $cliente->direccion = $request->input('direccion');

		//$personal->nombre
		//dd($request->all());
		//$dato=$request->only()
		//$personal = Personal::create($request->all());
		$cliente->save();
		return redirect()->route('registropersonal.index');

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
		$cliente = Cliente::find($id);

		return view('registrocliente.edit',compact('cliente'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreateClienteRequest $request)
   {
        $cliente = Cliente::find($id);
        $cliente->fill($request->all());
        $cliente->save();
        Session::flash('message','Cliente Actualizado Correctamente');
        return redirect()->route('registrocliente.index');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cliente::destroy($id);
       Session::flash('message','Usuario Actualizado Correctamente');
        return redirect()->route('registrocliente.index');
	}

}
