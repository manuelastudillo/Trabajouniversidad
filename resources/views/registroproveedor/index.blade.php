@extends('app')

@section('content')

       <h1> proveedors registrados </h1>

     <table class="table table-bordered table-striped">

 <thead>
     <tr>

        <th>ID</th>
        <th>Nombres</th>
        <th>Representante</th>
        <th>Rut</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Sitio Web</th>
        <th>Email</th>
       <th></th>
     </tr>
  </thead>
  <tbody>


            @foreach($proveedors as $proveedor)
            <tr>
                <td>{{$proveedor->id}}</td>
                <td>{{$proveedor->nombre}}</td>
                <td>{{$proveedor->representante}}</td>
                <td>{{$proveedor->rut}}</td>
                <td>{{$proveedor->direccion}}</td>
                <td>{{$proveedor->telefono}}</td>
                <td>{{$proveedor->web}}</td>
                <td>{{$proveedor->email}}</td>
                <td><input type="button" id="{{$proveedor->id}}" value="Editar" onclick="editarProveedor(this.id);"></td>
          </tr>
           @endforeach
            </tbody>

     </table>

    {!! $proveedors->render() !!}


  @endsection