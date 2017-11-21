<?php
include("Conexion.php");

class ArticuloMD
{

    function insertar($articuloDP) 
	{
		$conec=conectar();
		
		$cod_art=$articuloDP->getCodigo();
		$nombre==$articuloDP->getNombre();
		$tipo=$articuloDP->getTipo();
		$estado=$articuloDP->getEstado();
		$valor=$articuloDP->getValor();
		
		$query= "insert into articulo (COD_ARTICULO,NOMBRE,TIPO,ESTADO,VALOR)
		VALUES('".$cod_art."','".$nombre."','".$tipo."','".$estado."','".$valor."')";
	
		$result=mysqli_query($conec,$query);

		if($result)
			echo "Artículo insertado exitosamente";
		else
			die(mysqli_error($conec));
		
	}
        
}
?>
