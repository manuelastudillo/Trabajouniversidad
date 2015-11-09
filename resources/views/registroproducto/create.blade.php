@extends('app')

@section('content')

  <h1>Registrar Producto</h1>

    {!!Form::open(['route'=>'registroproducto.store'])!!}

    @include('registroproducto.partials.form')
   
   <div class="form-group">
   {!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}
@endsection