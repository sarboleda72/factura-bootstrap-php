<?php
// conexion a la base de datos
//Verificacion de Sesion
//include ('../usuarios/variable_sesion.php');
include('../bd/conexion.php');
include('../scripts/head.php');

$id = $_GET['id'];

// Consulta SQL para obtener todos los facturas
$query = "SELECT factura.id_factura, cliente.nombre, factura.fecha, factura.total FROM factura INNER JOIN cliente ON factura.id_cliente = cliente.id_cliente WHERE factura.id_factura = $id";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalle factura</title>        
    </head>

    <body class="container mt-4">
        <h3 class="mb-4">DETALLE FACTURA</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["nombre"] . "</td>";
                    echo "<td>" . $fila["fecha"] . "</td>";
                    echo "<td>" .number_format($fila["total"], 2, ',', '.')  . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h3 class="mt-4">PRODUCTOS</h3>
        <?php
        // Consulta SQL para obtener todos los productos
        $query = "SELECT producto.nombre, detalle_factura.id_detalle, detalle_factura.id_factura, detalle_factura.id_producto, detalle_factura.cantidad, detalle_factura.precio_unitario, detalle_factura.total_linea From detalle_factura Inner Join producto On detalle_factura.id_producto = producto.id_producto WHERE detalle_factura.id_factura = $id";
        $resultado = $conexion->query($query);

        if ($resultado->num_rows > 0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio unitario</th>
                        <th>Subtotal</th>
                        <th>Acciones <a class="btn btn-success" href="crear_detalle_factura.php?id=<?php echo $id ?>">+</a></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio unitario</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila["nombre"] . "</td>";
                        echo "<td>" . $fila["cantidad"] . "</td>";
                        echo "<td>" . $fila["precio_unitario"] . "</td>";
                        echo "<td>" . number_format($fila["total_linea"], 2, ',', '.')  . "</td>";
                        echo "<td><a class='btn btn-danger' href='op_eliminar_detalle_factura.php?id=" . $fila["id_detalle"] . "&idf=" . $id . "'>Quitar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "No hay productos en la factura. ¿<a href='crear_detalle_factura.php?id=$id'>Desea agregar un producto?</a>?";
        }
        ?>
        <a class="btn btn-primary" href="../factura.php">Volver</a>
    </body>

    </html>
    <?php
} else {
    header('Location: factura.php');
}
// Cerrar la conexión
$conexion->close();
?>
