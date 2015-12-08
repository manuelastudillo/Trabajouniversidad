<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



resource('ingreso','IngresoController');
resource('registrocliente','RegistroClienteController');
resource('registroproveedor','RegistroProveedorController');
resource('registropersonal','RegistroPersonalController');
resource('registroproducto','RegistroProductoController');
resource('venta','VentaController');

Route::get('prueba', function(){
	return view('layouts.layout');
});