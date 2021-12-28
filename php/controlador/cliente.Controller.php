<?php
require 'CORS.php';

include_once '../modelo/cliente.modelo.php';

if($_POST) {
    $cliente = new Cliente();

    switch ($_POST['accion']) {
        case 'CONSULTAR':
            echo json_encode($cliente->Consultar());
            break;
        case 'CONSULTAR_ID':
            echo json_encode($cliente->ConsultarPorId($_POST['id_cliente']));
            break;
        case 'GUARDAR':
            $nombre = $_POST['nombre'];
            $primer_ape = $_POST['primer_ape'];
            $segundo_ape = $_POST['segundo_ape'];
            $via = $_POST['via'];
            $domicilio = $_POST['domicilio'];
            $codigo = $_POST['codigo'];
            $localidad = $_POST['localidad'];
            $provincia = $_POST['provincia'];
            $pais = $_POST['pais'];

            $respuesta = $cliente->Guardar($nombre,$primer_ape,$segundo_ape_ape,$via,$domicilio,$codigo,$localidad,$provincia,$pais);
            echo json_encode($respuesta);
            break;
        case 'MODIFICAR':
            $id_cliente = $_POST['id_cliente'];
            $nombre = $_POST['nombre'];
            $primer_ape = $_POST['primer_ape'];
            $segundo_ape = $_POST['segundo_ape'];
            $via = $_POST['via'];
            $domicilio = $_POST['domicilio'];
            $codigo = $_POST['codigo'];
            $localidad = $_POST['localidad'];
            $provincia = $_POST['provincia'];
            $pais = $_POST['pais'];

            $respuesta = $cliente->Guardar($nombre,$primer_ape,$segundo_ape_ape,$via,$domicilio,$codigo,$localidad,$provincia,$pais);
            echo json_encode($respuesta);
            break;
        case 'ELIMINAR':
            $id_cliente = $_POST['id_cliente'];
            $respuesta = $cliente->Eliminar($id_cliente);
            echo json_encode($respuesta);
            break;

    }
}