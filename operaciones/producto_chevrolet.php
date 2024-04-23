<?php
//
//require_once '../conexion/conectar.php';
//
//$cnxchevro = getConexion();
//
////print_r($cnx);
//
//
//function getListchevro() {
//
//    global $cnxchevro;
//    $chevrosql = "SELECT codigo_chevrolet, chevrolet,nombre_chevrolet,precio_chevrolet FROM producto_chevrolet";
//    $chevroregistro = mysqli_query($cnxchevro, $chevrosql);
//    $resultadochevro = [];
//    while ($rowchevro = mysqli_fetch_assoc($chevroregistro)) {
//        $resultadochevro[] = $rowchevro;
//    }
//
//    return $resultadochevro;
//}
//
//if (isset($_REQUEST["accionchevro"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud
//
//    $accionchevro = $_REQUEST["accionchevro"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla
//
//    if ("getListchevro" == $accionchevro) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]
//
//        $listachevro = getListchevro(); // Obtiene la lista de reclamos usando una función getList()
//
////         print_r($listachevro); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
//        
//        require_once '../productos_chevo.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
//    }
//}


