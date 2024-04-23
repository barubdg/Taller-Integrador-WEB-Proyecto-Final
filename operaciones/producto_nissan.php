<?php

require_once '../conexion/conectar.php';

$cnxnissan = getConexion();

//print_r($cnx);


function getListnissan() {

    global $cnxnissan;
    $nissansql = "SELECT codigo_nissan, nissan, nombre_nissan, precio_nissan FROM producto_nissan";
    $productosnissan = mysqli_query($cnxnissan, $nissansql);
    $resultadonissan = [];
    while ($rowproducto = mysqli_fetch_assoc($productosnissan)) {
        $resultadonissan[] = $rowproducto;
    }

    return $resultadonissan;
}

if (isset($_REQUEST["accionnissan"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud

    $accionnissan = $_REQUEST["accionnissan"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla

    if ("getListnissan" == $accionnissan) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]

        $listanissan = getListnissan(); // Obtiene la lista de reclamos usando una función getList()

        // print_r($listareclamos); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
        
        require_once '../productos_nissan.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
    }
}


