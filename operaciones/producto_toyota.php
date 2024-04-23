<?php

require_once '../conexion/conectar.php';

$cnxtoyota = getConexion();

//print_r($cnx);


function getListtoyota() {

    global $cnxtoyota;
    $toyotasql = "SELECT codigo_toyota, toyota, nombre_toyota, precio_toyota FROM producto_toyota";
    $productostoyota = mysqli_query($cnxtoyota, $toyotasql);
    $resultadotoyota = [];
    while ($rowtoyota = mysqli_fetch_assoc($productostoyota)) {
        $resultadotoyota[] = $rowtoyota;
    }

    return $resultadotoyota;
}

if (isset($_REQUEST["acciontoyota"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud

    $acciontoyota = $_REQUEST["acciontoyota"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla

    if ("getListtoyota" == $acciontoyota) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]

        $listatoyota = getListtoyota(); // Obtiene la lista de reclamos usando una función getList()

        // print_r($listareclamos); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
        
        require_once '../productos_toyota.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
    }
}


