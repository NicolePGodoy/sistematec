<?php
/*Incluir conexionadminServicios.php */
include "php/conexionadminServicios.php";
/*Recoger el id que se ha enviado y se almacenara en una variable */
$id = $_GET["id"];
/*almacenando la Consulta a la base de datos indicandole que me traiga todos los datos que esten dentro del id (5) en este query  */
$sql = $conexion->query(" select * from services where id=$id ");

?>
<!--Traer el formulario usado para registar nuevos servicios para usarlo en la vista de modificar servicios crear una estructura HTML para pegar el formulario dentro de body y modificar segun la vista a usar  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--usar en la linea 21 m-auto para centrar el formulario -->
    <form class="col-3 p-3 m-auto" method="POST">
        <h5 class="text-center text-secondary">mordificar servicios</h5>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "php/modificarServicio.php";
        /*para mostrar los datos...
         mientas que en sql hayan registros, quiero que se almacenen en la variable $datos*/
        while ($datos = $sql->fetch_object()) { ?>
            <!--<div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">id</label>
                Imprimir info de la variable $datos del campo description
                <input type="text" class="form-control" name="id" value="/* $datos->id */">
            </div>-->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <!--Imprimir info de la variable $datos del campo description -->
                <input type="text" class="form-control" name="description" value="<?= $datos->description ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <!--Imprimir info de la variable $datos del campo price -->
                <input type="text" class="form-control" name="price" value="<?= $datos->price ?>">
            </div>
        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="btncreate" value="ok">Modificar servicios</button>
    </form>
</body>

</html>