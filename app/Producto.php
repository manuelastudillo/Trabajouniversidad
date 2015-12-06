<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

		protected $tabled = "productos";

			public $timestamps = false;

	protected $filable=["nombre","principio_activo","laboratorio","linea","codigo_barras","categoria","comision","stock","stockminimo","precio_compra","precio_venta","descuento"];

}
