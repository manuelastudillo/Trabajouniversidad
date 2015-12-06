<div class="col-sm-6">



    <div class="form-group">
        {!! Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombre:', 'required']) !!}
        @if($errors->has('nombre'))
            <p class="text-danger">{{ $errors->first('nombre') }}</p>
        @endif
    </div>


    <div class="form-group">
        {!! Form::text('principio_activo', null, ['class' => 'form-control floating-label', 'placeholder' => 'principio activo:', 'required']) !!}
        @if($errors->has('principio_activo'))
            <p class="text-danger">{{ $errors->first('principio_activo') }}</p>
        @endif
    </div>



    <div class="form-group">
        {!! Form::text('laboratorio', null, ['class' => 'form-control floating-label', 'placeholder' => 'Laboratorio:', 'required']) !!}
        @if($errors->has('laboratorio'))
            <p class="text-danger">{{ $errors->first('laboratorio') }}</p>
        @endif
    </div>



      <div class="form-group">
        {!! Form::text('linea', null, ['class' => 'form-control floating-label', 'placeholder' => 'Linea:', 'required']) !!}
        @if($errors->has('linea'))
            <p class="text-danger">{{ $errors->first('linea') }}</p>
        @endif
    </div>

       


      <div class="form-group">
        {!! Form::text('codigo_barras', null, ['class' => 'form-control floating-label', 'placeholder' => 'Codigo Barras:', 'required']) !!}
        @if($errors->has('codigo_barras'))
            <p class="text-danger">{{ $errors->first('codigo_barras') }}</p>
        @endif
    </div>

       

    <div class="form-group">
        {!! Form::text('categoria', null, ['class' => 'form-control floating-label', 'placeholder' => 'Categoria:', 'required']) !!}
        @if($errors->has('categoria'))
            <p class="text-danger">{{ $errors->first('categoria') }}</p>
        @endif
    </div>



    </div> {{-- /.col-sm-6 --}}

    <div class="col-sm-6">


 

    <div class="form-group">
        {!! Form::text('comision', null, ['class' => 'form-control floating-label', 'placeholder' => 'Comision:', 'required']) !!}
        @if($errors->has('comision'))
            <p class="text-danger">{{ $errors->first('comision') }}</p>
        @endif
    </div>



    <div class="form-group">
        {!! Form::text('stock', null, ['class' => 'form-control floating-label', 'placeholder' => 'Stock:', 'required']) !!}
        @if($errors->has('stock'))
            <p class="text-danger">{{ $errors->first('stock') }}</p>
        @endif
    </div>



    <div class="form-group">
        {!! Form::text('stockminimo', null, ['class' => 'form-control floating-label', 'placeholder' => 'Stock minimo:', 'required']) !!}
        @if($errors->has('stockminimo'))
            <p class="text-danger">{{ $errors->first('stockminimo') }}</p>
        @endif
    </div>

       


    <div class="form-group">
        {!! Form::text('precio_compra', null, ['class' => 'form-control floating-label', 'placeholder' => 'Precio Compra:', 'required']) !!}
        @if($errors->has('precio_compra'))
            <p class="text-danger">{{ $errors->first('precio_compra') }}</p>
        @endif
    </div>



    <div class="form-group">
        {!! Form::text('precio_venta', null, ['class' => 'form-control floating-label', 'placeholder' => 'Precio Venta:', 'required']) !!}
        @if($errors->has('precio_venta'))
            <p class="text-danger">{{ $errors->first('precio_venta') }}</p>
        @endif
    </div>



    <div class="form-group">
        {!! Form::text('descuento', null, ['class' => 'form-control floating-label', 'placeholder' => 'Descuento:', 'required']) !!}
        @if($errors->has('descuento'))
            <p class="text-danger">{{ $errors->first('descuento') }}</p>
        @endif
    </div>

    <div class="form-group">
        {!! Form::text('proveedor_id', null, ['class' => 'form-control floating-label', 'placeholder' => 'Proveedor Id:', 'required']) !!}
        @if($errors->has('proveedor_id'))
            <p class="text-danger">{{ $errors->first('proveedor_id') }}</p>
        @endif
    </div>


</div> {{--/.col-sn-6--}}