<?php

require_once '../conexion/conectar.php';

$nombresu = $_REQUEST ["nombresugerencia"];
$correosu = $_REQUEST ["correosugerencia"];
$sugerenciasu = $_REQUEST ["sugerencia"];

$insertsugesql = "INSERT INTO sugerencias (nombre_usuario_sugerencia,correo_usuario_sugerencia, sugerencia) VALUES ('".$nombresu."','".$correosu."','".$sugerenciasu."')";

//print_r($insertsugesql);

$cn = getConexion();
mysqli_query($cn, $insertsugesql);