<?php

header("content-type:application/json");
include '../models/Cliente.php';
include '../utils/repuestas.php';

function allusuarios() {
    $cliente = new Cliente();
    $lista = $cliente->obtListaClientes();
    return json_encode($lista);
}

function insertar($data) {
    $cliente = new Cliente();
    return $cliente->insertar($data);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case('GET'):
        echo allusuarios();
        break;
    case('POST'):
        $data = json_decode(file_get_contents('php://input'), true);
        echo insertar($data);
        break;
    default :
        echo "no";
}