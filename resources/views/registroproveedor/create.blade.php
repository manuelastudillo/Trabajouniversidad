@extends('app')

@section('content')

  <h1>Registrar Proveedor</h1>

    {!!Form::open(['route'=>'registroproveedor.store'])!!}

    @include('registroproveedor.partials.form')
   
   <div class="form-group">
   {!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}
@endsection