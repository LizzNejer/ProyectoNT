<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
	protected $table='pedido';//para cambiar el nombre de la tabla
	public $timestamps = false;	
	protected $fillable=['id','articulo_id','cliente_id','fecha_pedido'];
	
}
