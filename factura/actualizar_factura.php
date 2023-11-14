<?php
// conexion a la base de datos
include ('../usuarios/variable_sesion.php');
include ('../bd/conexion.php');
include('../scripts/head.php');

$id = $_GET['id'];

$query = "SELECT * FROM factura WHERE id_factura = " . $id;
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar factura</title>     
        
    </head>

    <body class="container mt-4">
        <h3 class="mb-4">Actualizar factura</h3>
        <form action="op_actualizar_factura.php" method="post">
            <input type="hidden" name="id_factura" value="<?php echo $fila["id_factura"]; ?>">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <select class="form-control" name="nombre">
                    <?php include('../cliente/select_cliente.php'); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" name="fecha" id = "fecha" value="<?php echo $fila["fecha"]; ?>">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Actualizar">
                <a class="btn btn-secondary" href="factura.php">Volver</a>
            </div>
            <?php
                include('fecha_actual.php');
            ?>
        </form>
    </body>

    </html>
    <?php
}
?>
