<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headeer extends Model
{
    
	protected $table='cabecera_facturacion';//para cambiar el nombre de la tabla
	public $timestamps = false;	
	protected $fillable=['id','cliente_id','descuento','iva','metodo_pago','numero_autorizacion','subtotal','total'];
	
}
