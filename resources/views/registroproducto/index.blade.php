@extends('app')

@section('content')

       <h1> personal registrados </h1>

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
       <th></th>
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
                <td><input type="button" id="{{$producto->id}}" value="Editar" onclick="editarProducto(this.id);"></td>
          </tr>
           @endforeach
            </tbody>

     </table>

    {!! $productos->render() !!}


  @endsection