<?php 
    $modulo = basename($_SERVER['REQUEST_URI'], '.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-marron">
    <div class="container-fluid">
        <a class="navbar-brand" href="./agendas.php"> <img src="./imagenes/LOGO-removebg-preview.png" atl="logo sistematec" width="100" weight="50" tittle="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $modulo == 'agendas' ? 'active' : ''; ?>" aria-current="page" href="./agendas.php">Agendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php 
                        if ($modulo == 'puntuaciones') { 
                            echo 'active';
                        } else {
                            echo'';
                        } 
                    ?>" aria-current="page" href="./puntuaciones.php">Puntuar Barbero</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $modulo == 'adminservicios' ? 'active' : ''; ?>" aria-current="page" href="./adminservicios.php">Administrar sevicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $modulo == 'adminusuarios' ? 'active' : ''; ?>" aria-current="page" href="./adminusuarios.php">Administrar usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $modulo == 'reportes' ? 'active' : ''; ?>" aria-current="page" href="./reportes.php">Reportes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>