@extends('app')

@section('content')

       <h1> Personal Registrados </h1>
       <div class"panel-body">
        
            <tr>   
              {!!link_to_route('registropersonal.create', $title='Crear Personal', $attributes =['class'=>'btn btn-primary'])!!}
  
          </tr>
     <table class="table table-bordered table-striped">

 <thead>
     <tr>

        <th>ID</th>
        <th>Rut</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Sexo</th>
        <th>Estado_civil</th>
        <th>Fecha_de_nacimiento</th>
        <th>Usuario_Email</th>
        <th>Contraseña</th>
        <th>Sueldo</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Cargo</th>
        <th>Acciones</th>
       <th></th>
     </tr>
  </thead>
  <tbody>

            @foreach($personals as $personal)
            <tr>
                <td>{{$personal->id}}</td>
                <td>{{$personal->rut}}</td>
                <td>{{$personal->nombre}}</td>
                <td>{{$personal->apellido}}</td>
                <td>{{$personal->sexo}}</td>
                <td>{{$personal->estado_civil}}</td>
                <td>{{$personal->fecha_nacimiento}}</td>
                <td>{{$personal->usuario_mail}}</td>
                <td>{{$personal->password}}</td>
                <td>{{$personal->sueldo}}</td>
                <td>{{$personal->telefono}}</td>
                <td>{{$personal->direccion}}</td>
                <td>{{$personal->cargo}}</td>
                <td>
                {!!link_to_route('registropersonal.edit', $title='Editar', $parameters = $personal->id, $attributes =['class'=>'btn btn-primary'])!!}
          </tr>
        @endforeach
        </tbody>
    </table>
    {!! $personals->render() !!}

@endsection