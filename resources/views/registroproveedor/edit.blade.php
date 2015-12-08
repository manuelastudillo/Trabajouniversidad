@extends('app')

@section('content')

  <h1>Actualizar Proveedor</h1>

   		{!!Form::model($proveedor,['route'=>['registroproveedor.update',$proveedor->id],'method'=>'PUT'])!!}

    @include('registroproveedor.partials.form')
   
   <div class="form-group">
   {!!Form::button('Actualizar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}

   	{!!Form::open(['route'=>['registroproveedor.destroy',$proveedor->id],'method'=>'DELETE'])!!}

 
   
   <div class="form-group">
   {!!Form::button('Eliminar',['type'=>'submit','class'=>'btn btn-danger'])!!}
   </div>
@endsection
