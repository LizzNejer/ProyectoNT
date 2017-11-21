<?php
include("Conexion.php");
class FPagoMD
{

        function insertar($pago) 
	{
 		$coleccion=conectar();

		$ID_Pedido=$pago->getIdPedido();		
		$total=$pago->getTotal();

		$query= "INSERT INTO pagos(ID, Total)
		VALUES('".$ID."','".$total."')";
	
		$result=mysqli_query($idcon,$query);

		if($result)
		{
			echo "Registro insertado exitosamente";
			foreach($result as $row)
			{
				echo $row['ID','Total']."<br>";
			}
		}		
		else
			die(mysqli_error($id_con));
	}
	
	function consultar($nuevo){
		
		 $coleccion=conectar();
				$ID_Pedido = $nuevo->getID_Pedido();
				
				$resultado=$coleccion->find(['ID_Pedido'=>$ID_Pedido]);
	
				foreach($resultado as $row)
				{
					echo $row['ID_Pedido']."<br/>";
				}
		
	}
	function modificar($id){
		 $coleccion=conectar();
		fpagoDP= new FPagoDP();
		
		$q = "UPDATE Implementos SET ID_Pedido="+pagodp->getID_Pedido() +"WHERE ID="+$id;
		$rs = mysql_query($q);
		if($rs == false) {
			echo '<p>Error al modificar los campos en la tabla.</p>';
		}else{
			echo '<p>Los datos se han modificado correctamente.</p>';
	}
	
	function eliminar($id)
	{
		 $coleccion=conectar();
		$q = "DELETE * FROM Implementos WHERE ID="+$id+;
		$rs = mysql_query($q);
		if($rs == false) {
			echo '<p>Error al eliminar los campos en la tabla.</p>';
		}else{
			echo '<p>Los datos se han eliminado correctamente.</p>';
		}
	}
        
}
?>
