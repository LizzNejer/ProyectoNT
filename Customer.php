<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
	protected $table='cliente';//para cambiar el nombre de la tabla
	public $timestamps = false;	
	protected $fillable=['id','apellido','cedula','correo','nombre','telefono'];
	
	
}
