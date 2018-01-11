<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
	protected $table='articulo';//para cambiar el nombre de la tabla
	public $timestamps = false;	
	protected $fillable=['id','estado','nombre','tipo','valor'];
	
}
