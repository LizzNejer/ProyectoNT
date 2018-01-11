<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    
	protected $table='inventario';//para cambiar el nombre de la tabla
	public $timestamps = false;	
	protected $fillable=['id','articulo_id','cantidad','stock_minimo'];
}
