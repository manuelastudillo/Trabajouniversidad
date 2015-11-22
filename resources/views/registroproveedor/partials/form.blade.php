<div class="col-sm-6">




    <div class="form-group">
        {!! Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombres:', 'required']) !!}
        @if($errors->has('nombre'))
            <p> class="text-danger">{{ $errors->first('nombre') }}</p>
        @endif
    </div>


    <div class="form-group">
        {!! Form::text('representante', null, ['class' => 'form-control floating-label', 'placeholder' => 'Representante:', 'required']) !!}
        @if($errors->has('representante'))
            <p> class="text-danger">{{ $errors->first('representante') }}</p>
        @endif
    </div>


    <div class="form-group">
        {!! Form::text('rut', null, ['class' => 'form-control floating-label', 'placeholder' => 'Rut:', 'required']) !!}
        @if($errors->has('rut'))
            <p> class="text-danger">{{ $errors->first('rut') }}</p>
        @endif
    </div>

    <div class="form-group">
        {!! Form::text('direccion', null, ['class' => 'form-control floating-label', 'placeholder' => 'Dirección:', 'required']) !!}
        @if($errors->has('direccion'))
            <p> class="text-danger">{{ $errors->first('direccion') }}</p>
        @endif
    </div>


    <div class="form-group">
        {!! Form::text('telefono', null, ['class' => 'form-control floating-label', 'placeholder' => 'Telefono:', 'required']) !!}
        @if($errors->has('telefono'))
            <p> class="text-danger">{{ $errors->first('telefono') }}</p>
        @endif
    </div>

       

     <div class="form-group">
        {!! Form::text('web', null, ['class' => 'form-control floating-label', 'placeholder' => 'Sitio web:', 'required']) !!}
        @if($errors->has('web'))
            <p> class="text-danger">{{ $errors->first('web') }}</p>
        @endif
    </div>


     <div class="form-group">
        {!! Form::text('email', null, ['class' => 'form-control floating-label', 'placeholder' => 'Emaill:', 'required']) !!}
        @if($errors->has('email'))
            <p> class="text-danger">{{ $errors->first('email') }}</p>
        @endif
    </div>

</div> {{--/.col-sn-6--}}