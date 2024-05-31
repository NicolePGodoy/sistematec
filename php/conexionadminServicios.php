<?php 
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistematec";

    $conexion = new mysqli($servername, $username, $password, $dbname);
    $conexion ->set_charset("utf8")

    
    
    /*if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    include 'adminservicios.php';
    $id= $_POST['id'];
    $description = $_POST['description'];
    $action = $_POST['action'];

    $sql = "INSERT INTO services( id, description, price) VALUES ('$id', '$description', '$action')"; 

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn ->error;
    }

    $conn->close ();*/
    ?>