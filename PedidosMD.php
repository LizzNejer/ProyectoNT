<?php
include("Conexion.php");
class PedidosMD
{

        function insertar($pedido) 
	{

		 $coleccion=conectar();
	    
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
	
	function consultar($id){
		
		 $coleccion=conectar();
				$ID_Pedido = $id->getID_Pedido();
				
				$resultado=$idcon->find(['ID_Pedido'=>$ID_Pedido]);
	
				foreach($resultado as $row)
				{
					echo $row['ID_Pedido']."<br/>";
				}
		
	}
	function modificar($id){
		 $coleccion=conectar();
		pedidodp= new PedidosDP();
		
		$q = "UPDATE Implementos SET ID_Pedido="+pedidodp->getID_Pedido() +"WHERE ID_Pedido="+$id;
		$rs = mysql_query($q);
		if($rs == false) {
			echo '<p>Error al modificar los campos en la tabla.</p>';
		}else{
			echo '<p>Los datos se han modificado correctamente.</p>';
	}
	
	function eliminar($id)
	{
		 $coleccion=conectar();
		$q = "DELETE * FROM Implementos WHERE ID_Pedido="+$id+;
		$rs = mysql_query($q);
		if($rs == false) {
			echo '<p>Error al eliminar los campos en la tabla.</p>';
		}else{
			echo '<p>Los datos se han eliminado correctamente.</p>';
		}
	}
        
}
?>
