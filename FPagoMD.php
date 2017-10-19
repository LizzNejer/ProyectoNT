<?php
class FPagoMD
{

        function insertar($pago) 
	{

		$id_con=mysqli_connect("localhost","root","");

		mysqli_select_db($idcon, "Implementos");

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
        
}
?>
