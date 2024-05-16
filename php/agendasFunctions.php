<?php 
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistematec";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $sevicio = $_POST['servicio'];
    $barbero = $_POST['barbero'];

    
    $sql = "INSERT INTO calendar(date, hour, customer_id, barber_id, service_id) VALUES ('$fecha', '$hora', {$_SESSION['id']}, $barbero, $sevicio)";

    if ($conn->query($sql) === TRUE) {
       
        echo "<script>alert('Cita agendada correctamente');</script>";
       
        echo "<script>setTimeout(function() { window.location.href = '/agendas.php'; }, 1000);</script>";
        exit();
    } else {
        // Mostrar un mensaje de alerta si ocurre un error
        echo "<script>alert('Error al agendar cita" . $conn->error . "');</script>";
    }   
    // Cerrar la conexión
    $conn->close();

?>


    