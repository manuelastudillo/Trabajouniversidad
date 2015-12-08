@extends('app')

@section('content')

       <h1> proveedors registrados </h1>
       <div class"panel-body">
        
            <tr>   
             {!!link_to_route('registroproveedor.create', $title='Crear Proveedor', $attributes =['class'=>'btn btn-primary'])!!}
  
          </tr>
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
        <th>Acciones</th>
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
                <td>
                {!!link_to_route('registroproveedor.edit', $title='Editar', $parameters = $proveedor->id, $attributes =['class'=>'btn btn-primary'])!!}
          </tr>
           @endforeach
            </tbody>

     </table>

    {!! $proveedors->render() !!}


  @endsection