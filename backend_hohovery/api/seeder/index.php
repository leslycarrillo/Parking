<?php

    $host ="185.201.11.212";
    $bd ="u868164586_wallas";
    $usuario = "u868164586_wallas";
    $contraseña = "B!uwj$]M";

    $cnx = new mysqli($host, $usuario, $contraseña, $bd);
    $errorCnx = false;
    if($cnx->connect_error){
        echo "error";
        $errorCnx = true;
    } else {
        echo "Conexión correcta :) Israel";
    }
    if($errorCnx == false){
        //crear la tabla usuario
        $tmp ="CREATE TABLE HHV_usuario ( 
            id int(10) AUTO_INCREMENT,
            nombre_completo varchar(25),
            email varchar(25),
            password varchar(25),
            isadmin boolean,
            PRIMARY KEY (id)
          )";
          if($cnx->query($tmp)){
            echo "Se creó la tabla usuario";
          } else echo "No se creo la tabla.";
    }

