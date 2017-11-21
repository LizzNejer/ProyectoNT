<?php
include("Conexion.php");

class ArticuloMD
{

    function insertar($articulo) 
	{
		$conec=conectar();
		
		$cod_art=$articulo->getCodigo();
		$nombre==$articulo->getNombre();
		$tipo=$articulo->getTipo();
		$estado=$articulo->getEstado();
		$valor=$articulo->getValor();
		
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
