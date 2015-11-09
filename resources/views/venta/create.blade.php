@extends('app')

@section('content')

  <h1>Registrar Venta</h1>

    {!!Form::open(['route'=>'venta.store'])!!}

    @include('venta.partials.form')
   
   <div class="form-group">
   {!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}
@endsection