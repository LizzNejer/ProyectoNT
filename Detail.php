<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    
	protected $table='detalle_facturacion';//para cambiar el nombre de la tabla
	public $timestamps = false;	
	protected $fillable=['id','articulo_id','cabecera_facturacion_id','cantidad'];
	
}
