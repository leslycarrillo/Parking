<?php
function resMsg($status = 404, $msg ="Método no válido"){
    http_response_code($status);
    $data = array("msg"=>$msg);
    $res = json_encode($data);
    echo $res;
}
function resData($status = 200, $data = null){
    http_response_code($status);
    $res = json_encode($data);
    echo $res;
}
