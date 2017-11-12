<?php

class FPagoDP {
    //put your code here
    
            var $ID_Pedido="";
            var $total="";
            
            
            function setID_Pedido($ID_Pedido)
            {
                $this->ID_Pedido=$ID_Pedido;
            }
            function getID_Pedido()
            {
                return $this->ID_Pedido;
            }
            
            function setTotal($total)
            {
                $this->total=$total;
            }
            function getTotal()
            {
                return $this->total;
            }
            
        }
 ?>
