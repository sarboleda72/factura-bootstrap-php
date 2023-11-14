<?php
// Conexion a la base de datos
include ('../usuarios/variable_sesion.php');
include('../bd/conexion.php');
include('../scripts/head.php');
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar producto</title>    
</head>
<body class="container mt-5">

    <h3 class="mb-4">AGREGAR PRODUCTO</h3>

    <form action="op_crear_detalle_factura.php" method="post">
        <div class="form-group">
            <label for="producto">Producto</label>
            <select class="form-control" name="producto" required>
                <option value="-1">Seleccione una opción</option>
                <?php include('../producto/select_producto.php'); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" required>
        </div>

        <input type="hidden" name="idf" value="<?php echo $id?>" required>

        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="detalle_factura.php?id=<?php echo $id?>" class="btn btn-secondary">Cancelar</a>
    </form> 
</body>
</html>
