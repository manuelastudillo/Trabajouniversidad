@extends('app')

@section('content')

       <h1> Productos </h1>
       <div class"panel-body">
        
            <tr>   
             {!!link_to_route('registroproducto.create', $title='Crear Producto', $attributes =['class'=>'btn btn-primary'])!!}
  
          </tr>
     <table class="table table-bordered table-striped">

 <thead>
     <tr>

        <th>ID</th>
        <th>Nombre</th>
        <th>Principio activo</th>
        <th>Laboratorio</th>
        <th>Linea</th>
        <th>Codigo Barras</th>
        <th>Categoria</th>
        <th>Comision</th>
        <th>Stock</th>
        <th>Stockmino</th>
        <th>Precio Compra</th>
        <th>Precio Venta</th>
        <th>Descuento</th>
        <th>Proveedor ID</th>
        <th>Acciones</th>
     </tr>
  </thead>
  <tbody>


            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->principio_activo}}</td>
                <td>{{$producto->laboratorio}}</td>
                <td>{{$producto->linea}}</td>
                <td>{{$producto->codigo_barras}}</td>
                <td>{{$producto->categoria}}</td>
                <td>{{$producto->comision}}</td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->stockminimo}}</td>
                <td>{{$producto->precio_compra}}</td>
                <td>{{$producto->precio_venta}}</td>
                <td>{{$producto->descuento}}</td>
                <td>{{$producto->proveedor_id}}</td>
                <td>
                {!!link_to_route('registroproducto.edit', $title='Editar', $parameters = $producto->id, $attributes =['class'=>'btn btn-primary'])!!}
          </tr>
           @endforeach
            </tbody>

     </table>


    {!! $productos->render() !!}


  @endsection

  