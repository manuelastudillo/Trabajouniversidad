@extends('app')


     <table class="table table-bordered table-striped">
          <thead>
             <tr>
                  <tr>#</tr>
                  <tr>Rut</tr>
                  <tr>Nombre</tr>
                  <tr>Apellidos</tr>
                  <tr>Fecha_de_nacimiento</tr>
                  <tr>Usuario_Email</tr>
                  <tr>Contraseña</tr>
                  <tr>Sueldo</tr>
                  <tr>Telefono</tr>
                  <tr>Direccion</tr>
                  <tr>Cargo</tr>
     </tr>
        </thead>
        <tbody>
            @foreach($personals as $personal)
                <tr>
                <td>={{$registropersonal->id}}</td>
                <td>={{$registropersonal->rut}}</td>
                <td>={{$registropersonal->nombre}}</td>
                <td>={{$registropersonal->apellido}}</td>
                <td>={{$registropersonal->sexo}}</td>
                <td>={{$registropersonal->estado_civil}}</td>
                <td>={{$registropersonal->fecha_nacimiento}}</td>
                <td>={{$registropersonal->usuario_mail}}</td>
                <td>={{$registropersonal->password}}</td>
                <td>={{$registropersonal->sueldo}}</td>
                <td>={{$registropersonal->telefono}}</td>
                <td>={{$registropersonal->direccion}}</td>
            </tr>
            </tbody>

     </table>



  @endsection
