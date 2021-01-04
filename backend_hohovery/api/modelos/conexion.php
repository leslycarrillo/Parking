<?php
    class Conexion {
        private $host;
        private $bd;
        private $usuario;
        private $contraseña;
        private $cnx;
        function Conexion(){
            $this->host ="185.201.11.212";
            $this->bd ="u868164586_wallas";
            $this->usuario = "u868164586_wallas";
            $this->contraseña = "B!uwj$]M";
            $this->cnx = new mysqli($this->host, $this->usuario, $this->contraseña, $this->bd);
        }
        function getCnx(){
            return $this->cnx;
        }
    }