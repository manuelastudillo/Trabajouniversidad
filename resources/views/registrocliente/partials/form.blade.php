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
        {!! Form::text('direccion', null, ['class' => 'form-control floating-label', 'placeholder' => 'Dirección:', 'required']) !!}
        @if($errors->has('direccion'))
            <p class="text-danger">{{ $errors->first('direccion') }}</p>
        @endif
    </div>

</div> {{--/.col-sn-6--}}