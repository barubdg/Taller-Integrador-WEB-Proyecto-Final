<?php

require_once '../conexion/conectar.php';

$cnx = getConexion();

//print_r($cnx);


function getList() {

    global $cnx;
    $cadsql = "SELECT nombre_usuario_reclamo, reclamos FROM reclamos";
    $reclamosregistro = mysqli_query($cnx, $cadsql);
    $resultado = [];
    while ($row = mysqli_fetch_assoc($reclamosregistro)) {
        $resultado[] = $row;
    }

    return $resultado;
}

if (isset($_REQUEST["accionreclamo"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud

    $accionrecla = $_REQUEST["accionreclamo"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla

    if ($accionrecla == "addreclamo") { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]

        require_once '../operaciones/controlinsertreclamos.php';
        $listareclamos = getList(); // Obtiene la lista de reclamos usando una función getList()

        // print_r($listareclamos); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
        
        require_once '../verreclamos.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
    }
}

