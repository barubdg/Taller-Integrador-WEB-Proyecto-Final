<?php

require_once '../conexion/conectar.php';

$cnpregufrecu = getConexion();

//print_r($cnx);


function getListpregufrecu() {

    global $cnpregufrecu;
    $pregufrecusql = "SELECT preguntas, respuestas FROM preguntas_frecuentes";
    $pregufrecuregistro = mysqli_query($cnpregufrecu, $pregufrecusql);
    $resultadopregufrecu = [];
    while ($rowpregufrecu = mysqli_fetch_assoc($pregufrecuregistro)) {
        $resultadopregufrecu[] = $rowpregufrecu;
    }

    return $resultadopregufrecu;
}

if (isset($_REQUEST["accionpregufrecu"])) { // Verifica si el parámetro "nombrereclamos" está presente en la solicitud

    $accionpregufrecu = $_REQUEST["accionpregufrecu"]; // Asigna el valor de "nombrereclamos" a la variable $nombrerecla

    if ("getListpregufrecu" == $accionpregufrecu) { // Comparación redundante entre $nombrerecla y $_REQUEST["nombrereclamos"]

        $listapregufrecu = getListpregufrecu(); // Obtiene la lista de reclamos usando una función getList()

//        print_r($listapregufrecu); // Este comando está comentado, por lo que no tiene efecto visible en la ejecución
        
        require_once '../preguntasfrecuentes.php'; // Incluye el archivo 'verreclamos.php' para mostrar la lista de reclamos
    }
}

