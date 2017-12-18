<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
	protected $table='texistencias';//para cambiar el nombre de la tabla
	
	public $timetamps = false;
}
