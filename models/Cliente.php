<?php

include("../utils/conexion.php");

class Cliente {

    private $id;
    private $nombre;
    private $apellido;
    private $ci;
    private $telefono;
    private $contraseña;

    function obtListaClientes() {
        $objCnx = new Cnx();
        $cnx = $objCnx->getCnx();
        $q = "SELECT * FROM `cliente`";
        $query = $cnx->prepare($q);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertar($usuario) {
        $objCnx = new Cnx();
        $cnx = $objCnx->getCnx();
        $q = "INSERT INTO cliente(nombre,apellido,ci,telefono,contrasnia)VALUES(:nombre,:apellido,:ci,:telefono,:contrasnia);";
        $query = $cnx->prepare($q);
        return $query->execute([
                    "nombre" => $usuario["nombre"],
                    "apellido" => $usuario["apellido"],
                    "ci" => $usuario["ci"],
                    "telefono" => $usuario["telefono"],
                    "contrasnia" => $usuario["contrasnia"]
        ]);
    }

}
