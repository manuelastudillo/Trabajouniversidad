@extends('app')

@section('content')

  <h1>Registrar Provedor</h1>

    {!!Form::open(['route'=>'registroprovedor.store'])!!}

    @include('registroprovedor.partials.form')
   
   <div class="form-group">
   {!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}
@endsection