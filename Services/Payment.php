<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
	protected $table='testudiante';//para cambiar el nombre de la tabla
	
	public $timetamps = false;
}
