<?php
    // credenciales para conectarse a la db
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistematec";
    // coneccion a db con mysql 
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>