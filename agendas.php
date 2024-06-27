<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Agendar Citas</title>
</head>

<body>   
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sistematec";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $res_barbers = $conn->query("SELECT id, name, lastname FROM users WHERE rol = 'barber';");
        $res_services = $conn->query("SELECT * FROM services");

    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-marron">
        <div class="container-fluid">
            <a class="navbar-brand" href="./agendas.html"> <img src="./imagenes/LOGO-removebg-preview.png" atl="logo sistematec" width="100" weight="50" tittle="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./agendas.php">Agendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./puntuaciones.html">Puntuar Barbero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./adminservicios.php">Administrar sevicios</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./adminusuarios.html">Administrar usuarios</a>
                    </li>       
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./reportes.html">Reportes</a>
                    </li>       
                </ul>
            </div>
        </div>
    </nav>
    <div class="text-center my-5">
        <h1>Agendar citas</h1>
    </div>
    <section class="py-5 mx-4 mb-5 container-form">
        <form class="px-md-4" action="/php/agendasFunctions.php" method="POST">
            <div class="px-4 row">
            <div class="mb-4 col-md-6">
                <input type="date" class="form-control input-form" id="fecha" name="fecha" placeholder="Fecha">
            </div>
            <div class="mb-4 col-md-6">
                <input type="time" class="form-control input-form" id="hora" name="hora" placeholder="Hora">
            </div>
            <div class="mb-4 col-md-6">
                <select class="form-select input-form" name="servicio">
                    <option selected>Seleccione un servicio</option> 
                    <?php while($row = $res_services->fetch_assoc()): ?>
                        <option value="<?php echo $row['id'] ?>"> <?php echo $row['description'] . ' - ' . '$' .  $row['price']?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-5 col-md-6">
                <select class="form-select input-form" name="barbero">
                    <option selected>Seleccione un barbero</option>
                    <?php while($row = $res_barbers->fetch_assoc()): ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] . ' ' . $row['lastname']?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">Agendar</button>
            </div>
            </div>
        </form>
    </section>
</body>
</html>