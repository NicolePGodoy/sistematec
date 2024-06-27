<?php 
    session_start();
    // credenciales para conectarse a la db

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistematec";
    // conexion a db con mysql
    $conn = new mysqli($servername, $username, $password, $dbname);
    // mensaje para mostrar si la conexion es fallida
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    // se obtienen los datos enviados mediante un formulario por el metodo post
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $sevicio = $_POST['servicio'];
    $barbero = $_POST['barbero'];

    // se realiza la consulta sql para obtener los datos de la tabla calendar
    $sql = "INSERT INTO calendar(date, hour, customer_id, barber_id, service_id) VALUES ('$fecha', '$hora', {$_SESSION['id']}, $barbero, $sevicio)";
    // se utiliza metodo query para hacer la consulta, si arroja verdadero se realiza el script para mostrar el mensaje 
    if ($conn->query($sql) === TRUE) {
       
        echo "<script>alert('Cita agendada correctamente');</script>";
    // la pagina se redirecciona a agendas.php nuevamente
        echo "<script>setTimeout(function() { window.location.href = '/agendas.php'; }, 1000);</script>";
        exit();
    } else {
        // Mostrar un mensaje de alerta si ocurre un error
        echo "<script>alert('Error al agendar cita" . $conn->error . "');</script>";
    }   
    // Cerrar la conexión
    $conn->close();

?>


    