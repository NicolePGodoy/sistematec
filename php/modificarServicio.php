<?php
/*Esto quiere decir que si se preciona este boton quiero que imprima el mensaje el condicional es para validar que ninguno de los campos este vacio */ 
if (!empty($_POST["btncreate"])) {
    if (/*!empty($_POST["id"]) and */!empty($_POST["description"]) and !empty($_POST["price"])) {
        # voy a almacenar para luego actualizar en la bd
        #$id=$_POST["id"];
        $description=$_POST["description"];
        $price=$_POST["price"];
        $sql=$conexion->query("update services set description='$description', price=$price where id=$id");
        if ($sql==1) {
            # condicional para validar si se ha modificado o no se ha modificado 
            header("location:adminservicios.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar servicios</div>";
        }
    
    }else{
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }
}
?>