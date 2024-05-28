<?php
$server = 'localhost:3307'; // Especifica el puerto 3307
$username = 'root';
$password = '';
$database = 'login_register_db';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Intenta conectar con la base de datos
    $conn = new mysqli($server, $username, $password, $database);
    
    // Verifica si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully";
    }
} else {
    echo "No form submitted";
}
?>
