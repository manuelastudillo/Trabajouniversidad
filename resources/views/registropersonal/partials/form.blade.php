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
        {!! Form::text('sexo', null, ['class' => 'form-control floating-label', 'placeholder' => 'Sexo:', 'required']) !!}
        @if($errors->has('sexo'))
            <p class="text-danger">{{ $errors->first('sexo') }}</p>
        @endif
    </div>

       


    <div class="form-group">
        {!! Form::text('estado_civil', null, ['class' => 'form-control floating-label', 'placeholder' => 'Estado Civil:', 'required']) !!}
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
        {!! Form::text('cargo', null, ['class' => 'form-control floating-label', 'placeholder' => 'Cargo:', 'required']) !!}
        @if($errors->has('cargo'))
            <p class="text-danger">{{ $errors->first('cargo') }}</p>
        @endif
    </div>

</div> {{--/.col-sn-6--}}