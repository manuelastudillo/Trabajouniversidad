@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="/auth/register">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="col-sm-6">



    <div class="form-group">
        {!! Form::text('rut', null, ['class' => 'form-control floating-label', 'placeholder' => 'Rut:', 'required']) !!}
        @if($errors->has('rut'))
            <p class="text-danger">{{ $errors->first('rut') }}</p>
        @endif
    </div>


    <div class="form-group">
        {!! Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombres:', 'required']) !!}
        @if($errors->has('nombre'))
            <p class="text-danger">{{ $errors->first('nombre') }}</p>
        @endif
    </div>



    <div class="form-group">
        {!! Form::text('apellido', null, ['class' => 'form-control floating-label', 'placeholder' => 'Apellidos:', 'required']) !!}
        @if($errors->has('apellido'))
            <p class="text-danger">{{ $errors->first('apellido') }}</p>
        @endif
    </div>



     <div class="form-group">
        {!! Form::select('sexo',
            ['masculino' => 'Masculino', 'femenino' => 'Femenino'],
            null,
            ['class' => 'form-control floating-label', 'placeholder' => 'Sexo:', 'required']) !!}
        @if($errors->has('estado_civil'))
            <p class="text-danger">{{ $errors->first('sexo') }}</p>
        @endif
    </div>
       


     <div class="form-group">
        {!! Form::select('estado_civil',
            ['soltero(a)' => 'Soltero(a)', 'casado(a)' => 'Casado(a)','viudo(a)' => 'Viudo(a)', 'separado(a)' => 'Separado(a)'],
            null,
            ['class' => 'form-control floating-label', 'placeholder' => 'Estado_Civil:', 'required']) !!}
        @if($errors->has('estado_civil'))
            <p class="text-danger">{{ $errors->first('estado_civil') }}</p>
        @endif
    </div>


       

    <div class="form-group">
        {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control floating-label', 'placeholder' => 'Fecha de nacimiento:', 'required']) !!}
        @if($errors->has('fecha_nacimiento'))
            <p class="text-danger">{{ $errors->first('fecha_nacimiento') }}</p>
        @endif
    </div>



    </div> {{-- /.col-sm-6 --}}

    <div class="col-sm-6">


 

    <div class="form-group">
        {!! Form::text('usuario_mail', null, ['class' => 'form-control floating-label', 'placeholder' => 'Usuario Mail:', 'required']) !!}
        @if($errors->has('usuario_mail'))
            <p class="text-danger">{{ $errors->first('usuario_mail') }}</p>
        @endif
    </div>



    <div class="form-group">
        {!! Form::text('password', null, ['class' => 'form-control floating-label', 'placeholder' => 'Password:', 'required']) !!}
        @if($errors->has('password'))
            <p class="text-danger">{{ $errors->first('password') }}</p>
        @endif
    </div>

    <div class="form-group">
        {!! Form::text('password', null, ['class' => 'form-control floating-label', 'placeholder' => 'Password:', 'required']) !!}
        @if($errors->has('password'))
            <p class="text-danger">{{ $errors->first('password') }}</p>
        @endif
    </div>


    <div class="form-group">
        {!! Form::text('sueldo', null, ['class' => 'form-control floating-label', 'placeholder' => 'Sueldo:', 'required']) !!}
        @if($errors->has('sueldo'))
            <p class="text-danger">{{ $errors->first('sueldo') }}</p>
        @endif
    </div>

       


    <div class="form-group">
        {!! Form::text('telefono', null, ['class' => 'form-control floating-label', 'placeholder' => 'Telefono:', 'required']) !!}
        @if($errors->has('telefono'))
            <p class="text-danger">{{ $errors->first('telefono') }}</p>
        @endif
    </div>



    <div class="form-group">
        {!! Form::text('direccion', null, ['class' => 'form-control floating-label', 'placeholder' => 'Direccion:', 'required']) !!}
        @if($errors->has('direccion'))
            <p class="text-danger">{{ $errors->first('direccion') }}</p>
        @endif
    </div>



    <div class="form-group">
        {!! Form::select('cargo',
            ['personal' => 'Personal', 'administrador' => 'Administrador'],
            null,
            ['class' => 'form-control floating-label', 'placeholder' => 'Rol:', 'required']) !!}
        @if($errors->has('cargo'))
            <p class="text-danger">{{ $errors->first('cargo') }}</p>
        @endif
    </div>


</div> {{--/.col-sn-6--}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
