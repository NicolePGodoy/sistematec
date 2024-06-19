<?php
    include_once 'connectionDB.php';

    if(isset($_POST['crear'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $query = $_POST['query'];

    
        // Crear la consulta SQL para insertar un nuevo usuario
        $sql = "INSERT INTO reports (title, description, query) VALUES ('$title', '$description', '$query')";
    
        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            // Redirigir al usuario a la página de inicio de 
            echo "<script>alert('Reporte guardado correctamente');</script>";
            // Redirigir al usuario a la página de inicio de sesión después de un breve retraso
            echo "<script>setTimeout(function() { window.location.href = '/reportes.php'; }, 1000);</script>";
            exit();
        } else {
            // Mostrar un mensaje de alerta si ocurre un error
            echo "<script>alert('Error al guardar reporte: " . $conn->error . "');</script>";
        }   
        // Cerrar la conexión
        $conn->close();
        
    }

?>