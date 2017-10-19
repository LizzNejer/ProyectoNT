<?php
class PedidosMD
{

        function insertar($pedido) 
	{

		$idcon=mysqli_connect("localhost","root","");

		mysqli_select_db($idcon, "Implementos");
	    
		$fecha=$pedido->getFecha();
		$cod_articulo=$pedido->getCodarticulo();
		$ID_cliente=$pedido->getIdcliente();

		$query= "INSERT INTO PEDIDO (fecha, cod_articulo, ID_cliente )
		VALUES('".$fecha."','".$cod_articulo."','".$ID_cliente."')";
	
		$result=mysqli_query($idcon,$query);

		if($result)
		{
			echo "Registro insertado exitosamente";
			foreach($result as $row)
			{
				echo $row['fecha','cod_articulo','ID_cliente']."<br>";
			}
		}		
		else
			die(mysqli_error($id_con));
	}
        
}
?>
