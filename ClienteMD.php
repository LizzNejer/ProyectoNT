<?php
include("Conexion.php");

class ClienteMD
{

    function insertar($cliente) 
	{
		$conec=conectar();
		
		$id=$cliente->getId();
		$nombre==$cliente->getNombre();
		
		$query= "INSERT INTO `cliente`(`ID`, `NOMBRE`) VALUES('".$id."','".$nombre."')";
	
		$result=mysqli_query($conec,$query);

		if($result)
			echo "Cliente insertado exitosamente";
		else
			die(mysqli_error($conec));
		
	}
    
	function consultar($cliente) 
	{
		$conec=conectar();
		
		$id=$cliente->getId();
		
		$query= "SELECT `ID`, `NOMBRE` FROM `cliente` WHERE `ID`='".$id."'";
	
		$result=mysqli_query($conec,$query);

		if($result)
			echo "Consulta exitosa";
		else
			die(mysqli_error($conec));
		
	}
}
?>