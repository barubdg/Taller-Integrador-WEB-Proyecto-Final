<?php

require_once '../conexion/conectar.php';

$cnsuge = getConexion();

//print_r($cnx);


function getListSugerencia() {

    global $cnsuge;
    $sugesql = "SELECT nombre_usuario_sugerencia, sugerencia FROM sugerencias";
    $sugerenciasregistro = mysqli_query($cnsuge, $sugesql);
    $resultadosugerencia = [];
    while ($rowsugerencia = mysqli_fetch_assoc($sugerenciasregistro)) {
        $resultadosugerencia[] = $rowsugerencia;
    }

    return $resultadosugerencia;
}

if (isset($_REQUEST["accion"])) {
//    print_r('$cnsuge');
    $accion = $_REQUEST["accion"];
//    print_r($accion);
    if ($accion == "add") {
        require_once '../operaciones/controlinsertsugerencias.php';
        $listasugerencia = getListSugerencia();
//        print_r($listasugerencia);
        require_once '../versugerencia.php';
    }
}


