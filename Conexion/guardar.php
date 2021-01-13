<?php
    require 'conexion.php';

    $nombre=$mysqli->real_escape_string($_POST['nombre']);
    $telefono=$mysqli->real_escape_string($_POST['telefono']);
    $fecha_nac=$mysqli->real_escape_string($_POST['fecha_nac']);
    $estado_civil=$mysqli->real_escape_string($_POST['estado_civil']);

    $sql="insert into empleados (nombre, telefono, fecha_nac, estado_civil, activo) values ('$nombre','$telefono','$fecha_nac','$estado_civil',1)";
    //echo $sql;
    $resultado = $mysqli->query($sql);

    if($resultado >0){
        echo 'Registro Agregado';
    } else {
        echo 'Registro Abortado';

    }

    echo "<a href='index.php'>Inicio</a>";

?>