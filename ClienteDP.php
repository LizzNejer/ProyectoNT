<?php
	class ClienteDP
    {
        var $id;
        var $nombre;
		
        function getId() {
            return $this->id;
        }

        function getNombre() {
            return $this->nombre;
        }
        function setId($id) {
            $this->id = $id;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

    }
?>