<?php
//Verificacion de Sesion
include ('../usuarios/variable_sesion.php');
//Scripts
include('../scripts/head.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear factura</title>    
</head>
<body>
    <div class="container mt-4">
        <h3>CREAR FACTURA</h3>
        <form action="op_crear_factura.php" method="POST">
            <div class="form-group">
                <label for="nombre">Cliente</label>
                <select class="form-control" name="nombre" id="nombre">
                    <option value="-1">Seleccione una opción</option>
                    <?php include('../cliente/select_cliente.php'); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>                
                <input type="date" class="form-control" name="fecha" id="fecha" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="factura.php" class="btn btn-secondary">Volver</a>
        </form>
    </div>    
    <?php
        include('fecha_actual.php');
    ?>
</body>
</html>
