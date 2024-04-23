<?php

require_once '../conexion/conectar.php';

$cnxsuzu = getConexion();

//print_r($cnx);


function getListsuzu() {

    global $cnxsuzu;
    $suzusql = "SELECT codigo_suzuki, suzuki, nombre_suzuki, precio_suzuki FROM producto_suzuki";
    $productossuzu = mysqli_query($cnxsuzu, $suzusql);
    $resultadosuzu = [];
    while ($rowsuzu = mysqli_fetch_assoc($productossuzu)) {
        $resultadosuzu[] = $rowsuzu;
    }

    return $resultadosuzu;
}

if (isset($_REQUEST["accionsuz"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud

    $accionsuz = $_REQUEST["accionsuz"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla

    if ("getListsuz" == $accionsuz) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]

        $listasuzu = getListsuzu(); // Obtiene la lista de reclamos usando una función getList()

        // print_r($listareclamos); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
        
        require_once '../productos_suzu.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
    }
}


