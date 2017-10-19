<?php
class FPagoMD
{

        function insertar($pago) 
	{

		$id_con=mysqli_connect("localhost","root","");

		mysqli_select_db($idcon, "Implementos");

	        $ID=$pago->getID();
		$Descripcion=$pago->getDescripcion();
		$total=$pago->getTotal();

		$query= "INSERT INTO pagos(ID, Descripcion, Total)
		VALUES('".$ID."', '".$Descripcion."','".$total."')";
	
		$result=mysqli_query($idcon,$query);

		if($result)
		{
			echo "Registro insertado exitosamente";
		}		
		else
			die(mysqli_error($id_con));
	}
        
}
?>