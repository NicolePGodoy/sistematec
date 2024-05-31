<?php

#validar que se haga click en el boton 
if (!empty($_POST["btncreate"])) {
    #validar que el usuario ingrese todos los campos del formulario
    if (!empty($_POST["id"]) and !empty($_POST["description"]) and !empty($_POST["price"])) {
        
        $id=$_POST["id"];
        $description=$_POST["description"];
        $price=$_POST["price"];

        $sql =$conexion->query("insert into services(id, description, price) values('$id','$description','$price')");
        #si sql es = 1 imprime caso correcto si no imprime caso negativo
        if ($sql==1) {
            echo '<div class="alert alert-success">Servicio registrado correctamente</div>';
            return;
        } else {
            echo '<div class="alert alert-danger">Error al registrar servicio</div>';
        }
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}

?>