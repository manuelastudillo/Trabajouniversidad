@extends('app')

@section('content')

  <h1>Registrar </h1>

    {!!Form::open(['route'=>'ingreso.store'])!!}

   @include('ingreso.partials.form')
   
   <div class="form-group">
   {!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}
@endsection