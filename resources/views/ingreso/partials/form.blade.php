<div class="col-sm-6">

     <div class="form-group">
     
      {!!form::select('rol',
      ['estudiante'=>'Estudiante','docente'=>'Docente','funcionario'=>'Funcionario'],
      null,
      ['class'=>'form-control floating-label','placeholder'=>'Rol:'] )!!}
      </div>
    
    <div class="form-group">

      {!!Form::text('rut',null,['class'=> 'form-control floating-label','placeholder'=>'Rut:'])!!}
      </div>

    <div class="form-group">

      {!!Form::text('Dirección',null,['class'=>'form-control floating-label','placeholder'=>'Nombres:'])!!}
       </div>

    <div class="form-group">
  
      {!!Form::text('Telefono',null,['class'=>'form-control floating-label','placeholder'=>'Apellidos:'])!!}
       </div>


</div> {{--/.col-sn-6--}}