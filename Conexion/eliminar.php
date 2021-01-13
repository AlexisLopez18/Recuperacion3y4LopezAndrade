<?php
    require 'conexion.php';

    $id=$mysqli->real_escape_string($_GET['id']);
    

    $sql="update empleados set activo =0 where id=$id";
    //echo $sql;
    $resultado = $mysqli->query($sql);

    if($resultado >0){
        echo 'Registro Eliminado';
    } else {
        echo 'Error al Eliminar Registro ';

    }


    echo "<a href='index.php'>Inicio</a>";

?>