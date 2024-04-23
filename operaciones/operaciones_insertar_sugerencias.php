<?php


require_once '../conexion/conectar.php';

$sugeinsertsql = "insert into reclamos (nombre_usuario_reclamo,correo_usuario_reclamos, reclamos) values ('".$nom."','".$corr."')";

$cnsugeinsert = getConexion();

mysqli_query($cnsugeinsert, $sugeinsertsql);
