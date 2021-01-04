<?php
//Importar
require_once('utils/respuesta.php');
include 'controladores/usuario.php';
//Cabeceras
header("Content-Type: application/json; charset=UTF-8");


// Caracteristicas
//var_dump($_REQUEST);

if(!isset($_REQUEST["endpoint"]) && $_SERVER['REQUEST_METHOD']=='GET'){
    resMsg(200, "Servicio disponible.");    
} else {
    $data = file_get_contents('php://input');
    $json = json_decode($data);
    $_POST = get_object_vars($json);
    switch ($_REQUEST["endpoint"]) {
        case 'usuario':
            if($_SERVER['REQUEST_METHOD']=='GET' && $_REQUEST['id']){
                getOneUsuario($_REQUEST['id']);
            } else if($_SERVER['REQUEST_METHOD']=='GET'){
                getAllUsuarios();                
            } else if($_SERVER['REQUEST_METHOD']=='POST'){
                insertUsuario($_POST);
            } else {
                resMsg(404, "Método no válido para el endpoint conectados");                
            }
            break;    
        default:
            resMsg();
            break;
    }
}


//echo "Método llamado: ".$_SERVER["REQUEST_METHOD"];


//$respuesta = array("elemto1", "elemto 2");

//http_response_code(404);
//$res = json_encode($respuesta);

//echo $res;

