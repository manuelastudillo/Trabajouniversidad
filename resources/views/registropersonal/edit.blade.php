@extends('app')

@section('content')

  <h1>Actualizar Personal</h1>

    		{!!Form::model($personal,['route'=>['registropersonal.update',$personal->id],'method'=>'PUT'])!!}

    @include('registropersonal.partials.form')
   
   <div class="form-group">
   {!!Form::button('Actualizar',['type'=>'submit','class'=>'btn btn-primary'])!!}
   </div>

{!!Form::close()!!}

   	{!!Form::open(['route'=>['registropersonal.destroy',$personal->id],'method'=>'DELETE'])!!}

 
   
   <div class="form-group">
   {!!Form::button('Eliminar',['type'=>'submit','class'=>'btn btn-danger'])!!}
   </div>

{!!Form::close()!!}
@endsection