<?php
    include 'conexion.php';
    class Usuario {
        private $id;
        private $nombre_completo;
        private $email;
        private $password;
        private $isadmin;

        function Usuario(){
            $this->id=0;
            $this->nombre_completo="";
            $this->email="";
            $this->password="";
            $this->isadmin=false;
        }
        function setAll($nombre, $email, $password, $isadmin){
            $this->nombre_completo=$nombre;
            $this->email=$email;
            $this->password=$password;
            $this->isadmin=$isadmin;
        }
        function getNombre(){ return $this->nombre_completo;}
        function getEmail(){ return $this->email;}
        function getPassword(){ return $this->password;}
        function getIsAdmin(){ return $this->isadmin;}
        function all(){
            $cnx = new Conexion();
            $c = $cnx->getCnx();
            $q ="SELECT * FROM HHV_usuario";
            $resultado = $c->query($q);
            $rows = $resultado->fetch_all(MYSQLI_ASSOC);
            return $rows;
        }
        function one($id){
            $cnx = new Conexion();
            $c = $cnx->getCnx();
            $q ="SELECT * FROM HHV_usuario WHERE id=?";
            $query = $c->prepare($q);
            $query->bind_param("i", $id);
            $query->execute();
            $rows = $query->get_result();
            return $rows->fetch_assoc();
        }
        function insert(){
            $cnx = new Conexion();
            $c = $cnx->getCnx();
            $q ="INSERT INTO HHV_usuario (nombre_completo, email, password, isadmin) values (?,?,MD5(?),?)";
            $query = $c->prepare($q);
            $query->bind_param("ssss", $this->nombre_completo, $this->email, $this->password, $this->isadmin);
            $query->execute();
            if($query) return true;
            return false;
        }
        function update(){
            $cnx = new Conexion();
            $c = $cnx->getCnx();
            $q ="UPDATE HHV_usuario set nombre_completo = ?, email = ?, isadmin=? WHERE id =?";
            $query = $c->prepare($q);
            $query->bind_param("sssi", $this->nombre_completo, $this->email, $this->isadmin, $this->id);
            $query->execute();
            if($query) return true;
            return false;
        }

    }