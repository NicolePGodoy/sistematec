<?php
/*Incluir conexionadminServicios.php */
include "php/conexionadminUsuarios.php";
/*Recoger el id que se ha enviado y se almacenara en una variable */
$id = $_GET["id"];
/*almacenando la Consulta a la base de datos indicandole que me traiga todos los datos que esten dentro del id (5) en este query  */
$sql = $conexion->query(" select * from users where id=$id ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form class="col-3 p-3 m-auto" method="POST">
        <h5 class="text-center text-secondary">Modificar usuarios</h5>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        // credenciales para conectarse a la db
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sistematec";
        // coneccion a db con mysql 
        $conn = new mysqli($servername, $username, $password, $dbname);

        $res_rol = $conn->query("SELECT DISTINCT rol FROM users WHERE rol IN ('admin','user','barber');");

        include "php/modificarUsuarios.php";
        /*para mostrar los datos...
         mientas que en sql hayan registros, quiero que se almacenen en la variable $datos*/
        while ($datos = $sql->fetch_object()) { ?>
        <!--<div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">id</label>
                Imprimir info de la variable $datos del campo name
                <input type="text" class="form-control" name="id" value="/* $datos->id */">
            </div>-->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control" name="name" value="<?= $datos->name ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">lastname</label>
                <input type="text" class="form-control" name="lastname" value="<?= $datos->lastname ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo</label>
                <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
            </div>
            <div class="mb-3">
                <div class="mb-5 col-md-6">
                <!-- se crea ptra opcion de seleccion para "rol"  -->
                <select class="form-select input-form" name="rol">
                    <!-- etiqueta opcion para desplegar la seleccion de rol -->
                    <option selected>Seleccione un rol</option>
                      <!-- se crea el bucle while para iterar sobre los datos de una consulta a la db  -->
                     <!-- la variable $rest_rol es el conjunto de resultados obtenidos a una consulta a la db -->
                    <?php while($row = $res_rol->fetch_assoc()): ?>
                        <!-- se imprime el valor de la columna id, seguido del rol -->
                        <option value="<?php echo $row['rol'] ?>"><?php echo $row['rol']?></option>
                        <!-- final del bucle cuando se decida la opcion -->
                    <?php endwhile; ?>
                </select>
            </div>
            </div>
        <?php }
        ?>
        <button type="submit" class="btn btn-primary" name="btncreate" value="ok">Modificar Usuario</button>
    </form>
</body>

</html>