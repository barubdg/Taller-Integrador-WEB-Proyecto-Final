<?php

require_once '../conexion/conectar.php';

$cnxhyu = getConexion();

//print_r($cnx);


function getListhyu() {

    global $cnxhyu;
    $hyusql = "SELECT codigo_hyundai, hyundai,nombre_hyundai,precio_hyundai FROM producto_hyundai;";
    $productoshyu = mysqli_query($cnxhyu, $hyusql);
    $resultadohyu = [];
    while ($rowhyu = mysqli_fetch_assoc($productoshyu)) {
        $resultadohyu[] = $rowhyu;
    }

    return $resultadohyu;
}

if (isset($_REQUEST["accionhyu"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud

    $accionhyundai = $_REQUEST["accionhyu"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla

    if ("getListhyu" == $accionhyundai) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]

        $listahyu = getListhyu(); // Obtiene la lista de reclamos usando una función getList()

        // print_r($listareclamos); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
        
        require_once '../productos_hyu.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
    }
}


