<?php
    include 'modelos/usuario.php';
    //include 'utils/respuesta.php';
    
    function getAllUsuarios(){        
        $u = new Usuario();
        $r = $u->all();
        if($r) resData(200, $r);
        else resMsg(400, "Error");
    }
    function getOneUsuario($id){
        $u = new Usuario();
        $r = $u->one($id);
        if($r) resData(200, $r);
        else resMsg(400, "Error");
    }
    function insertUsuario($data){
        $u = new Usuario();
        $u->setAll($data["nombre_completo"],$data["email"], $data["password"], $data["isadmin"]);
        $r = $u->insert();
        if($r) resMsg(200, "Se insertó correctamente");
        else resMsg(400, "Error");
    }