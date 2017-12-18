<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
	protected $table='tpedido';//para cambiar el nombre de la tabla
	
	public $timetamps = false;
}
