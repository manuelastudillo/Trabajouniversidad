<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use Session;
use Redirect;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductoRequest;

class RegistroProductoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productos = Producto::orderBy('nombre','asc')->paginate(15);
		
		return view('registroproducto.index')->with('productos',$productos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	return view('registroproducto.create');	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProductoRequest $request)
	{
	//dd($request->all());
		$producto = new Producto();
	    $producto->nombre = $request->input('nombre');
        $producto->principio_activo = $request->input('principio_activo');
        $producto->laboratorio = $request->input('laboratorio');
	    $producto->linea = $request->input('linea');
        $producto->codigo_barras = $request->input('codigo_barras');
        $producto->categoria = $request->input('categoria');
	    $producto->comision = $request->input('comision');
	    $producto->stock = $request->input('stock');
        $producto->stockminimo = $request->input('stockminimo');
	    $producto->precio_compra = $request->input('precio_compra');
        $producto->descuento = $request->input('descuento');
        $producto->proveedor_id = $request->input('proveedor_id');

		//$personal->nombre
		//dd($request->all());
		//$dato=$request->only()
		//$personal = Personal::create($request->all());
	 	$producto->save();
		return redirect()->route('registroproducto.index');
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
		$producto = Producto::find($id);

		return view('registroproducto.edit',['producto'=>$producto]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreateProductoRequest $request)
   {
        $producto = Producto::find($id);
        $producto->fill($request->all());
        $producto->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return redirect()->route('registroproducto.index');
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Producto::destroy($id);
        Session::flash('message','Usuario Actualizado Correctamente');
        return redirect()->route('registroproducto.index');
	}

}
