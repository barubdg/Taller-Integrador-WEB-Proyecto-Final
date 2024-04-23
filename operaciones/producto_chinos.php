<?php

//require_once '../conexion/conectar.php';
//
//$cnxchino = getConexion();
//
////print_r($cnx);
//
//
//function getListchino() {
//
//    global $cnxchino;
//    $chinosql = "SELECT codigo_chino, chino, nombre_chino, precio_chino FROM producto_chino";
//    $chinoregistro = mysqli_query($cnxchino, $chinosql);
//    $resultadochino = [];
//    while ($rowchino = mysqli_fetch_assoc($chinoregistro)) {
//        $resultadochino[] = $rowchino;
//    }
//
//    return $resultadochino;
//}
//
//if (isset($_REQUEST["accionchino"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud
//
//    $accionchino = $_REQUEST["accionchino"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla
//
//    if ("getListchino" == $accionchino) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]
//
//        $listachino = getListchino(); // Obtiene la lista de reclamos usando una función getList()
//
//        // print_r($listareclamos); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
//        
//        require_once '../productos_chinos.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
//    }
//}


