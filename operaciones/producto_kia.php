<?php

//require_once '../conexion/conectar.php';
//
//$cnxkia = getConexion();
//
////print_r($cnx);
//
//
//function getListkia() {
//
//    global $cnxkia;
//    $kiasql = "SELECT codigo_kia, kia,nombre_kia, precio_kia FROM producto_kia";
//    $productoskia = mysqli_query($cnxkia, $kiasql);
//    $resultadokia = [];
//    while ($rowkia = mysqli_fetch_assoc($productoskia)) {
//        $resultadokia[] = $rowkia;
//    }
//
//    return $resultadokia;
//}
//
//if (isset($_REQUEST["accionkia"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud
//
//    $accionkia = $_REQUEST["accionkia"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla
//
//    if ("getListkia"== $accionkia) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]
//
//        $listakia = getListkia(); // Obtiene la lista de reclamos usando una función getList()
//
//        // print_r($listareclamos); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
//        
//        require_once '../productos_kia.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
//    }
//}


