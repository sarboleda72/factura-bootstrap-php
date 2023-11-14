<?php
include('../bd/conexion.php');
include('../scripts/head.php');
include('../usuarios/variable_sesion.php');

$query = "SELECT * FROM producto WHERE id_producto = " . $_GET['id'];
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <!-- Bootstrap CSS -->    
</head>
<body>
    <div class="container mt-3">
        <h3>Actualizar Producto</h3>
        <form action="op_actualizar_producto.php" method="post">
            <input type="hidden" name="id_producto" value="<?php echo $fila["id_producto"]; ?>">
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $fila["nombre"]; ?>">
            </div>
            
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" name="precio" value="<?php echo $fila["precio"]; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="producto.php" class="btn btn-secondary">Volver</a>
        </form>
    </div>  
    
</body>
</html>

<?php
}
?>
