@extends('app.prueba')

@section('content')

  <h1>Registrar Personal</h1>

    {!!Form::open(['route'=>'registropersonal.store'])!!}

   @include('registropersonal.partials.form')
   
   <div class="form-group">
   {!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}
@endsection