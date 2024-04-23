<?php

require_once '../conexion/conectar.php';

$nombrere = $_REQUEST ["nombrereclamos"];
$correore = $_REQUEST ["correoreclamos"];
$reclamore = $_REQUEST ["reclamo"];

$insertreclasql = "INSERT INTO reclamos (nombre_usuario_reclamo,correo_usuario_reclamos, reclamos) VALUES ('".$nombrere."','".$correore."','".$reclamore."')";

//print_r($insertreclasql);

$cnrecla = getConexion();
mysqli_query($cnrecla, $insertreclasql);