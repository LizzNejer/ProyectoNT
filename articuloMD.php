<?php
class ArticuloMD
{

    function insertar($articulo) 
	{
		$id_con=mysqli_connect("localhost","root","");

		mysqli_select_db($id_con, "implementos");
	
		$cod_art=$articulo->getCodArticulo();
		$nombre=$articulo->getNombre();
		$tipo=$articulo->getTipo();
		$estado=$articulo->getEstado();
		$valor=$articulo->getValor();

		$query= "INSERT INTO articulo(COD_ARTICULO,NOMBRE, TIPO, ESTADO,VALOR)
		VALUES($cod_art,'".$nombre."','".$tipo."', $estado,$valor)";
	
		$result=mysqli_query($id_con,$query);

		if($result)
			echo "Registro insertado exitosamente";
		else
			die(mysqli_error($id_con));
	}
        
}
?>