<?php

//require_once '../conexion/conectar.php';
//
//$cnxVentilador = getConexion();
//
////print_r($cnx);
//
//
//function getListVentilador() {
//
//    global $cnxVentilador;
//    $Ventiladorsql = "SELECT ventilador, nombre_ventilador, descripcion_ventilador, precio_ventilador FROM producto_ventilador";
//    $productosVentilador = mysqli_query($cnxVentilador, $Ventiladorsql);
//    $resultadoVentilador = [];
//    while ($rowVentilador = mysqli_fetch_assoc($productosVentilador)) {
//        $resultadoVentilador[] = $rowVentilador;
//    }
//
//    return $resultadoVentilador;
//}
//
////$listaVentilador = getListVentilador();
//
//if (isset($_REQUEST["accionventilador"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud
//    $accionVentilador = $_REQUEST["accionventilador"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla
//
//    if ("getListventilador" == $accionVentilador) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]
//        $listaVentilador = getListVentilador(); // Obtiene la lista de reclamos usando una función getList()
//
////        print_r($listaLogoRadiador); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
//        require_once '../productos_ventiladores.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
//    }
//}


