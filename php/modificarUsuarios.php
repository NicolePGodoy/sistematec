<?php 

if (!empty($_POST["btncreate"])){
    if (!empty($_POST["id"]) and !empty($_POST["name"]) and !empty($_POST["lastname"]) and !empty($_POST["correo"]) and !empty($_POST["rol"])) {
        # voy a almacenar para luego actualizar en la bd
        #$id=$_POST["id"];
        $id=$_POST["id"];
        $name=$_POST["name"];
        $correo=$_POST["correo"];
        $password=$_POST["password"];
        $rol=$_POST["rol"];
        $sql=$conexion->query("update users set name='$name', lastname='$lastname' , correo='$correo' , password='$password' where id=$id");
        if ($sql==1) {
            # condicional para validar si se ha modificado o no se ha modificado
            header("location:adminusuarios.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar usuarios</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }
}
?>