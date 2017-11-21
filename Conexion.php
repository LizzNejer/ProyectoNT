<?php

	function conectar()
	{
		$user="root";
		$passw="";
		$server="localhost";
		$db="implementos";
		
		$id_con=mysqli_connect($server,$user,$passw) or die ("Error al conectar a la base de datos");

		mysqli_select_db($id_con, $db);
		
		return $id_con;
	}
?>