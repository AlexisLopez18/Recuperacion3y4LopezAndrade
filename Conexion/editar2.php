<?php
    require 'conexion.php';

    $id=$mysqli->real_escape_string($_POST['id']);
    $nombre=$mysqli->real_escape_string($_POST['nombre']);
    $telefono=$mysqli->real_escape_string($_POST['telefono']);
    $fecha_nac=$mysqli->real_escape_string($_POST['fecha_nac']);
    $estado_civil=$mysqli->real_escape_string($_POST['estado_civil']);

    $sql= "update empleados set nombre='$nombre',telefono='$telefono', fecha_nac='$fecha_nac', estado_civil='$estado_civil' where id=$id";

    $resultado = $mysqli->query($sql);

    if($resultado >0){
        echo 'Registro Modificado';
    } else {
        echo 'Modificacion Abortada';

    }

    
    echo "<a href='index.php'>Inicio</a>";

?>
