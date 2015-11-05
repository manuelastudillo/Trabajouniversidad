@extends('app')

@section('content')

  <h1>Registrar Cliente</h1>

    {!!Form::open(['route'=>'registrocliente.store'])!!}

    @include('registrocliente.partials.form')
   
   <div class="form-group">
   {!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}
@endsection