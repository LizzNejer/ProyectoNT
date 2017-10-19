<?php
class InventarioMD
{

    function insertar($cod_art) 
	{
		$id_con=mysqli_connect("localhost","root","");

		mysqli_select_db($id_con, "implementos");
	
		$cod_art=$cod_art;
		
		$query= "INSERT INTO inventario(COD_ARTICULO)
		VALUES($cod_art)";
	
		$result=mysqli_query($id_con,$query);

		if($result)
			echo "Registro insertado exitosamente";
		else
			die(mysqli_error($id_con));
	}
        
}
?>