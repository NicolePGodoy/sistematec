<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
    <title>Administrar servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/75a235ac3b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Boton script que llama la funcion eliminar declara una variable respuesta que confirma en pantalla si deseo o no eliminar el servicio -->
    <script>
        function eliminar() {
            var respuesta = confirm("Estas seguro que deseas eliminar");
            return respuesta
        }
    </script>
    <?php include_once 'sections/header.php' ?>
    <div class="text-center my-3">
        <h1>Administrar servicios</h1>
        <?php
        include "php/conexionadminServicios.php";
        include "php/eliminarServicio.php";
        ?>
    </div>
    <div class="container-fluid row">
        <form class="col-3 p-3" method="POST">
            <h5 class="text-center text-secondary">Registro de servicios</h5>
            <?php

            include "php/registroNuevoServicio.php";
            ?>
            <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">id</label>
                <input type="text" class="form-control" name="id">
            </div> -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <button type="submit" class="btn btn-primary" name="btncreate" value="ok">Create</button>
        </form>
        <div class="col-9 p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <!-- <th scope="col">ID_DB</th> -->
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "php/conexionadminServicios.php";
                    $sql = $conexion->query("select * from services");
                    $id_cod = 1;
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $id_cod ?></td>
                            <!-- <td><?= $datos->id ?></td> -->
                            <td><?= $datos->description ?></td>
                            <td><?php print "$ " ?> <?= $datos->price ?></td>
                            <td>
                                <!-- Modificacion del boton para que tome la ruta de php/modificarServicio.php y al precionar el boton debe llevar el id
                                 y ese id se debe enviar a la vista de modificarServicio.php esto me va a permitir hacer una consulta a la base de datos
                                y ademas quiero que me envie un valor dentro de una variable-->
                                <a href="modificarServicio.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="adminservicios.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    $id_cod++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>