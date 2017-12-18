<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
	protected $table='tpago';//para cambiar el nombre de la tabla
	
	public $timetamps = false;
}
