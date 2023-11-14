<?php    
    //Conexión a la base de datos
    #include ('../bd/conexion.php');
    include ('../usuarios/variable_sesion.php');
    include('../scripts/head.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cliente</title>
    
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Crear Nuevo Cliente</h3>
        <form action="op_crear_cliente.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="number" class="form-control" name="telefono" id="telefono">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="cliente.php" class="btn btn-secondary">Volver</a>
        </form>
    </div>    
</body>
</html>
