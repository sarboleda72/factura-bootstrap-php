<?php
    include('../scripts/head.php');
    include('../usuarios/variable_sesion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear producto</title>
    <!-- Incluir Bootstrap desde un CDN -->    
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Crear nuevo producto</h3>
        <form action="op_crear_producto.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="producto.php" class="btn btn-secondary">Volver</a>
        </form>
    </div>   
    
</body>
</html>
