<?php
require 'CORS.php';

include_once '../modelo/distancia.modelo.php';

if($_POST) {
    $distancia = new Distancia();

    switch ($_POST['accion']) {
        case 'CONSULTAR':
            echo json_encode($distancia->ConsultarComunidad());
            break;
        case 'CONSULTAR_PRO':
            echo json_encode($distancia->ConsultarCiudad($_POST['datos']));
            break;
        case 'CONSULTAR_MUN':
            echo json_encode($distancia->ConsultarLocal($_POST['datos']));
            break;
        case 'CONSULTAR_DATOS':
            echo json_encode($distancia->ConsultarDatos($_POST['datos']));
            break;
    }
}