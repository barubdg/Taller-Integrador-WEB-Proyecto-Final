<?php

require_once '../conexion/conectar.php';

$cnxproducto = getConexion();

//print_r($cnx);


function getListproducto() {

    global $cnxproducto;
    $productosql = "SELECT producto,nombre_producto, precio_producto FROM producto_producto";
    $productosregistro = mysqli_query($cnxproducto, $productosql);
    $resultadoproducto = [];
    while ($rowproducto = mysqli_fetch_assoc($productosregistro)) {
        $resultadoproducto[] = $rowproducto;
    }

    return $resultadoproducto;
}




function getListdiversidad() {

    global $cnxproducto;
    $diversidadsql = "SELECT producto_muestra, nombre_muestra, descripcion_muestra FROM producto_muestra";
    $productosdiversidad = mysqli_query($cnxproducto, $diversidadsql);
    $resultadodiversidad = [];
    while ($rowdiversidad = mysqli_fetch_assoc($productosdiversidad)) {
        $resultadodiversidad[] = $rowdiversidad;
    }

    return $resultadodiversidad;
}





function getListVentilador() {

    global $cnxproducto;
    $Ventiladorsql = "SELECT ventilador, nombre_ventilador, descripcion_ventilador, precio_ventilador FROM producto_ventilador";
    $productosVentilador = mysqli_query($cnxproducto, $Ventiladorsql);
    $resultadoVentilador = [];
    while ($rowVentilador = mysqli_fetch_assoc($productosVentilador)) {
        $resultadoVentilador[] = $rowVentilador;
    }

    return $resultadoVentilador;
}




function getListchevro() {

    global $cnxproducto;
    $chevrosql = "SELECT codigo_chevrolet, chevrolet,nombre_chevrolet,precio_chevrolet FROM producto_chevrolet";
    $chevroregistro = mysqli_query($cnxproducto, $chevrosql);
    $resultadochevro = [];
    while ($rowchevro = mysqli_fetch_assoc($chevroregistro)) {
        $resultadochevro[] = $rowchevro;
    }

    return $resultadochevro;
}



function getListchino() {

    global $cnxproducto;
    $chinosql = "SELECT codigo_chino, chino, nombre_chino, precio_chino FROM producto_chino";
    $chinoregistro = mysqli_query($cnxproducto, $chinosql);
    $resultadochino = [];
    while ($rowchino = mysqli_fetch_assoc($chinoregistro)) {
        $resultadochino[] = $rowchino;
    }

    return $resultadochino;
}



function getListhyu() {

    global $cnxproducto;
    $hyusql = "SELECT codigo_hyundai, hyundai,nombre_hyundai,precio_hyundai FROM producto_hyundai;";
    $productoshyu = mysqli_query($cnxproducto, $hyusql);
    $resultadohyu = [];
    while ($rowhyu = mysqli_fetch_assoc($productoshyu)) {
        $resultadohyu[] = $rowhyu;
    }

    return $resultadohyu;
}



function getListkia() {

    global $cnxproducto;
    $kiasql = "SELECT codigo_kia, kia,nombre_kia, precio_kia FROM producto_kia";
    $productoskia = mysqli_query($cnxproducto, $kiasql);
    $resultadokia = [];
    while ($rowkia = mysqli_fetch_assoc($productoskia)) {
        $resultadokia[] = $rowkia;
    }

    return $resultadokia;
}



function getListnissan() {

    global $cnxproducto;
    $nissansql = "SELECT codigo_nissan, nissan, nombre_nissan, precio_nissan FROM producto_nissan";
    $productosnissan = mysqli_query($cnxproducto, $nissansql);
    $resultadonissan = [];
    while ($rowproducto = mysqli_fetch_assoc($productosnissan)) {
        $resultadonissan[] = $rowproducto;
    }

    return $resultadonissan;
}



function getListsuzu() {

    global $cnxproducto;
    $suzusql = "SELECT codigo_suzuki, suzuki, nombre_suzuki, precio_suzuki FROM producto_suzuki";
    $productossuzu = mysqli_query($cnxproducto, $suzusql);
    $resultadosuzu = [];
    while ($rowsuzu = mysqli_fetch_assoc($productossuzu)) {
        $resultadosuzu[] = $rowsuzu;
    }

    return $resultadosuzu;
}





function getListtoyota() {

    global $cnxproducto;
    $toyotasql = "SELECT codigo_toyota, toyota, nombre_toyota, precio_toyota FROM producto_toyota";
    $productostoyota = mysqli_query($cnxproducto, $toyotasql);
    $resultadotoyota = [];
    while ($rowtoyota = mysqli_fetch_assoc($productostoyota)) {
        $resultadotoyota[] = $rowtoyota;
    }

    return $resultadotoyota;
}








if (isset($_REQUEST["accion"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud
    $accion = $_REQUEST["accion"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla

    if ("getList" == $accion) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]
        $listaproducto = getListproducto(); // Obtiene la lista de reclamos usando una función getList()
//        print_r($listaproducto); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
        $listadiversidad = getListdiversidad();
        $listaVentilador = getListVentilador();
        $listachevro = getListchevro();
        $listachino = getListchino();
        $listahyu = getListhyu();
        $listakia = getListkia();
        $listanissan = getListnissan();
        $listasuzu = getListsuzu();
        $listatoyota = getListtoyota();
        require_once '../productos.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
    }
}

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


