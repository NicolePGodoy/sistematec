<?php

#validar que se haga click en el boton 
if (!empty($_POST["btncreate"])) {
    #validar que el usuario ingrese todos los campos del formulario
    if (!empty($_POST["name"]) and !empty($_POST["lastname"]) and !empty($_POST["correo"]) and !empty($_POST["password"])and !empty($_POST["rol"])) {
        
         //$id=$_POST["id"];
        $name=$_POST["name"];
        $lastname=$_POST["lastname"];
        $correo=$_POST["correo"];
        $password=$_POST["password"];
        $rol=$_POST["rol"];

        $sql =$conexion->query("INSERT INTO users( name, lastname, correo, password, rol) values('$name','$lastname' , '$correo' , '$password' , '$rol') ");
        #si sql es = 1 imprime caso correcto si no imprime caso negativo
        if ($sql==1) {
            echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
            return;
        } else {
            echo '<div class="alert alert-danger">Error al registrar Usuario</div>';
        }
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}

?>