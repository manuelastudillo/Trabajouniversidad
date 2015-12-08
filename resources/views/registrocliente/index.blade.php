@extends('app')

@section('content')

  <h1> Clientes Registrados </h1>
       <div class"panel-body">
        
            <tr>   
             {!!link_to_route('registrocliente.create', $title='Crear Cliente', $attributes =['class'=>'btn btn-primary'])!!}
  
          </tr>
     <table class="table table-bordered table-striped">


 <thead>
     <tr>

       <th>Id</th>
       <th>Rut</th>
       <th>Nombre</th>
       <th>Apellido</th>
       <th>Direccion</th>
       <th>Acciones</th>
       <th></th>
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
                <td>
                {!!link_to_route('registrocliente.edit', $title='Editar', $parameters = $cliente->id, $attributes =['class'=>'btn btn-primary'])!!}
          </tr>
        @endforeach
        </tbody>
    </table>
    {!! $clientes->render() !!}

@endsection