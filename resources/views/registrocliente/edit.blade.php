@extends('app')

@section('content')

  <h1>Actualizar Personal</h1>

    		{!!Form::model($cliente,['route'=>['registrocliente.update',$cliente->id],'method'=>'PUT'])!!}

    @include('registrocliente.partials.form')
   
   <div class="form-group">
   {!!Form::button('Actualizar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}

   	{!!Form::open(['route'=>['registrocliente.destroy',$cliente->id],'method'=>'DELETE'])!!}

 
   
   <div class="form-group">
   {!!Form::button('Eliminar',['type'=>'submit','class'=>'btn btn-danger'])!!}
   </div>

{!!Form::close()!!}
@endsection