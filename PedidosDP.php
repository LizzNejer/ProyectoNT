<?php

class PedidosDP {
    //put your code here
    
            var $fecha="";
            var $cod_articulo="";
            var $ID_cliente="";
            
            function setFecha($fecha)
            {
                $this->fecha=$fecha;
            }
            function getFecha()
            {
                return $this->fecha;
            }
            
            function setCodArticulo($cod_articulo)
            {
                $this->cod_articulo=$cod_articulo;
            }
            function getCodArticulo()
            {
                return $this->cod_articulo;
            }
			
			function setIDCliente($ID_cliente)
            {
                $this->ID_cliente=$ID_cliente;
            }
            function getIDCliente()
            {
                return $this->ID_cliente;
            }
	function verficarPedidoMD ()
	{	
		PedidosMD $pemd=new PedidosMD();
		return $pemd-=verificarPedidoMD($this->getID_Pedido);
	}
            
        }
 ?>
