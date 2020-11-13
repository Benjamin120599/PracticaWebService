<?php

    class ConexionBD {
        private $conexion;

        private $host = 'localhost:3306';
        private $usuario = 'root';
        private $contraseña = '6ba72d0901bd4e16';
        private $bd = 'Usuarios_BD_Escuela';

        public function __construct() {
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
        }

        public function getConexion() {
            return  $this->conexion;
        }
    }

?>