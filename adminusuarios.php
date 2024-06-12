<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
    <title>Administrar usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/75a235ac3b.js" crossorigin="anonymous"></script>
</head>

<body>
     <!--Boton script que llama la funcion eliminar declara una variable respuesta que confirma en pantalla si deseo o no eliminar el servicio -->
     <script> 
        function eliminar(){
            var respuesta=confirm("Estas seguro que deseas eliminar");
            return respuesta
        }
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-marron">
        <div class="container-fluid">
            <a class="navbar-brand" href="./agendas.html"> <img src="./imagenes/LOGO-removebg-preview.png" atl="logo sistematec" width="100" weight="50" tittle="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./agendas.php">Agendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./puntuaciones.html">Puntuar Barbero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./adminservicios.php">Administrar sevicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./adminusuarios.php">Administrar usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./reportes.html">Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="text-center my-3">
        <h1>Administrar usuarios</h1>
        <?php
        include "php/conexionadminUsuarios.php";
        include "php/eliminarUsuario.php";
        ?>
    </div>
    <div class="container-fluid row">
        <form class="col-3 p-3" method="POST">
            <h5 class="text-center text-secondary">Registro de usuarios</h5>
            <?php
            include "php/registroUsuarios.php";
            ?>
            <!--<div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">id</label>
                <input type="text" class="form-control" name="id">
            </div>-->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">lastname</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">password</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">rol</label>
                <input type="text" class="form-control" name="rol">
            </div>
            <button type="submit" class="btn btn-primary" name="btncreate" value="ok">Registrar</button>
        </form>
        <div class="col-9 p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TIPO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">ROL</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "php/conexionadminUsuarios.php";
                    $sql = $conexion->query("select * from users");
                    $id_cod = 1;
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->name ?></td>
                            <td><?= $datos->lastname ?></td>
                            <td><?= $datos->correo ?></td>
                            <td><?= $datos->rol ?></td>
                            <td>
                                <!-- Modificacion del boton para que tome la ruta de php/modificarusuario.php y al precionar el boton debe llevar el id
                                 y ese id se debe enviar a la vista de modificarusuario.php esto me va a permitir hacer una consulta a la base de datos
                                y ademas quiero que me envie un valor dentro de una variable-->
                                <a href="modificarUsuario.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="adminusuarios.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    $id_cod++;
                    }
                    ?>
                </tbody>
        </div>
    </div>
    </table>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>