<?php

require_once '../conexion/conectar.php';

$cnxdiversidad = getConexion();

//print_r($cnx);


function getListdiversidad() {

    global $cnxdiversidad;
    $diversidadsql = "SELECT producto_muestra, nombre_muestra, descripcion_muestra FROM producto_muestra";
    $productosdiversidad = mysqli_query($cnxdiversidad, $diversidadsql);
    $resultadodiversidad = [];
    while ($rowdiversidad = mysqli_fetch_assoc($productosdiversidad)) {
        $resultadodiversidad[] = $rowdiversidad;
    }

    return $resultadodiversidad;
}

function getListproducto() {

    global $cnxdiversidad;
    $productosql = "SELECT producto,nombre_producto, precio_producto FROM producto_producto";
    $productosregistro = mysqli_query($cnxdiversidad, $productosql);
    $resultadoproducto = [];
    while ($rowproducto = mysqli_fetch_assoc($productosregistro)) {
        $resultadoproducto[] = $rowproducto;
    }

    return $resultadoproducto;
}

if (isset($_REQUEST["accion"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud
    $accion = $_REQUEST["accion"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla

    if ("getList" == $accion) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]
        $listadiversidad = getListdiversidad(); // Obtiene la lista de reclamos usando una función getList()
//        print_r($listaproducto); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución

        require_once '../productos.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
    }
}


