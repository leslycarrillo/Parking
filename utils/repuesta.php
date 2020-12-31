<?php
//IMPORTAR CONTROLADORES 
include 'controllers/usuario.php';
//importar
require_once('utils/mensaje.php');
//Cabeceras
header("Content-Type: application/json; charset=UTF-8");
// Caracteristicas
//var_dump($_REQUEST);
//valida servicio
if(!isset($_REQUEST["endpoint"]) && $_SERVER['REQUEST_METHOD']=='GET'){
    resMensaje(200,"servicio disponible.");
} else {
    switch ($_REQUEST["endpoint"]) {
        case 'usuario':
            if($_SERVER['REQUEST_METHOD']=='GET'){
                allusuarios();
            }
            break;

        case 'login':
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $data = file_get_contents('php://input');
                $json = json_decode($data);
                $_POST = get_object_vars($json);
                
                if($_POST['usuario'] == 'admin' && $_POST['contraseña'] == 'admin'){
                    //aqui
                    $data = array("token"=>"asdasdasdasdasd", "rol"=>'Administrador');
                    resData(200,$Data);
                } else {
                    resMensaje(200,"Usuario y/o contraseña incorrecta.");  
                }

            } else {
                resMensaje(404,"Metodo no valido para el endpoint login");
                
            }
            break;
        case 'conectados':
            if($_SERVER['REQUEST_METHOD']=='GET'){
                //aqui
                $data = array("cantidad"=>rand(0,1024154));
                resData(200,$Data);  
            } else {
                resMensaje(404,"Metodo no valido para el endpoint conectados");
            }
            break;    
        default:
           resMensaje();
            break;
    }
}


//echo "MÃ©todo llamado: ".$_SERVER["REQUEST_METHOD"];


//$respuesta = array("elemto1", "elemto 2");

//http_response_code(404);
//$res = json_encode($respuesta);

//echo $res;