<?php
# validar que se haya enviado correctamente el "id" con el condicional if 
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from services where id=$id ");
    #validar si se hya eliminado o no el registro
    if ($sql==1) {
        echo '<div class = "alert alert-success">Servicio eliminado correctamente</div>';
    } else {
        echo '<div class = "alert alert-success">Error al eliminar servicio</div>';
    }
    
}
?>