<?php
    include_once 'connectionDB.php';

    if($_POST['type'] == 'crear') {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $rol = $_POST['rol'];
    
        // Hash de la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        // Crear la consulta SQL para insertar un nuevo usuario
        $sql = "INSERT INTO users (name, lastname, correo, password, rol) VALUES ('$name', '$lastname', '$correo', '$hashed_password', '$rol')";
    
        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            // Redirigir al usuario a la página de inicio de 
            echo "<script>alert('Usuario creado correctamente');</script>";
            // Redirigir al usuario a la página de inicio de sesión después de un breve retraso
            echo "<script>setTimeout(function() { window.location.href = '/index.php'; }, 1000);</script>";
            exit();
        } else {
            // Mostrar un mensaje de alerta si ocurre un error
            echo "<script>alert('Error al crear el usuario: " . $conn->error . "');</script>";
        }   
        // Cerrar la conexión
        $conn->close();
    }

    if($_POST['type'] == 'login') {
        // Recuperar los datos del formulario
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        // Consulta SQL para verificar las credenciales del usuario
        $sql = "SELECT * FROM users WHERE correo = '$correo'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($contraseña, $row['password'])) {
                // Iniciar sesión y redirigir a la página principal
                session_start();
                $_SESSION = $row;
                echo "<script>alert('Bienvenido');</script>";
                echo "<script>setTimeout(function() { window.location.href = '/agendas.php'; }, 1000);</script>";
                exit();
            } else {
                echo "<script>alert('Contraseña incorrecta');</script>";
                echo "<script>setTimeout(function() { window.location.href = '/index.php'; }, 1000);</script>";
            }
        } else {
            echo "<script>alert('Usuario no encontrado');</script>";
            echo "<script>setTimeout(function() { window.location.href = '/index.php'; }, 1000);</script>";
    
        }
        // Cerrar la conexión
        $conn->close();
    }
?>