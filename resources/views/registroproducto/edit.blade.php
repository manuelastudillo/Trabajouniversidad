@extends('app')

@section('content')

  <h1>Registrar Producto</h1>

    {!!Form::model($producto,['route'=>['registroproducto.update',$producto->id]])!!}

    @include('registroproducto.partials.form')
   
   <div class="form-group">
   {!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}

   	{!!Form::open(['route'=>['registroproducto.destroy',$producto->id],'method'=>'DELETE'])!!}

 
   
   <div class="form-group">
   {!!Form::button('Eliminar',['type'=>'submit','class'=>'btn btn-danger'])!!}
   </div>
@endsection