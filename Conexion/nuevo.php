<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Recuperacion 3 y 4</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Empleados</h1>
        </div>
        <div class="row">
            <form id="registro" name="registro" method="POST" action="guardar.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el Nombre" autofocus require>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa el telefono" require>
                </div>
                <div class="form-group">
                    <label for="fecha_nac">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Ingresa la Fecha de Nacimiento" require>
                </div>
                <div class="form-group">
                    <label for="estado_civil">Estado Civil</label>
                    <select class="form-control" name="estado_civil" id="estado_civil" require>
                        <option value="soltero">Soltero</option>
                        <option value="casado">Casado</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="guarda" name="guarda" type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>