<?php
    require('conexion.php');
    $sql="select id, nombre, telefono, fecha_nac, estado_civil from empleados where activo=1";
    $resultado=$mysqli->query($sql);
?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <title>Recuperacion 3 y 4</title>
    <script>
        $(document).ready(function() {
            $('#tabla').DataTable();
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Empleados</h1>
        </div>
        <div class="row">
            <a href="nuevo.php" class="btn btn-dark">Registrar Empleado</a>
        </div>
        <table id="tabla" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Estado Civil</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while( $fila =$resultado->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['telefono']; ?></td>
                    <td><?php echo $fila['fecha_nac']; ?></td>
                    <td><?php echo $fila['estado_civil']; ?></td>
                    <td><a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning">Editar</a></td>
                    <td><a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</body>

</html>