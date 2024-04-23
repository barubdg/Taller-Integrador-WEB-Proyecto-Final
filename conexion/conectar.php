<?php


function getConexion(){
    
    $hostname = "localhost";
    $username = "root";
    $password = "pitersonson159";
    $database = "sixcarweb";
    $port = "3306";
    $cn = mysqli_connect($hostname, $username, $password, $database, $port) or 
                die("<strong> error de conexion a la base de datos: <strong>".mysql.error());
    
    return $cn;
    
}



