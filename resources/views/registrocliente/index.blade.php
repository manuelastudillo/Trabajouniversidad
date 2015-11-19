@extends('app')

@section('content')

  <h1> Clientes Registrados </h1>

  <table class="table table-bordered table-striped">

 <thead>
     <tr>

       <th>Id</th>
       <th>Rut</th>
       <th>Nombre</th>
       <th>Apellido</th>
       <th>Direccion</th>
     </tr>
  </thead>
  <tbody>


        @foreach($clientes as $cliente)
   	    <tr>   	   	  
           <td>{{$cliente->id}}</td>
           <td>{{$cliente->rut}}</td>
           <td>{{$cliente->nombre}}</td>
           <td>{{$cliente->apellido}}</td>
           <td>{{$cliente->direccion}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $clientes->render() !!}

@endsection