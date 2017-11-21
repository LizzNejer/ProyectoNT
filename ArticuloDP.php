<?php
    class ArticuloDP
    {
        var $codigo;
        var $nombre;
        var $tipo;
        var $estado;
        var $valor;
        function getCodigo() {
            return $this->codigo;
        }
		
        function getNombre() {
            return $this->nombre;
        }
		
        function getTipo() {
            return $this->tipo;
        }

        function getEstado() {
            return $this->estado;
        }
		
        function getValor() {
            return $this->valor;
        }
		
        function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setTipo($tipo) {
            $this->tipo = $tipo;
        }
		
        function setEstado($estado) {
            $this->estado = $estado;
        }

        function setValor($valor) {
            $this->valor = $valor;
        }

    }
?>
