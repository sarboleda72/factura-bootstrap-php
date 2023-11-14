<?php
// conexion a la base de datos
//Verificacion de Sesion
include ('../usuarios/variable_sesion.php');
include ('../bd/conexion.php');
include('../scripts/head.php');

// Consulta SQL para obtener todos los facturas
$query = "SELECT factura.id_factura, cliente.nombre, factura.fecha, factura.total FROM factura INNER JOIN cliente ON factura.id_cliente = cliente.id_cliente";
$resultado = $conexion->query($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <!-- No es necesario volver a enlazar los estilos de Bootstrap si ya lo has hecho en head.php -->
</head>
<body>
    <div class="container mt-4">
        <h3 class="mb-4">FACTURAS</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Acciones <a href='crear_factura.php' class='btn btn-success'>
                        <i class="fas fa-plus"></i> Añadir Factura
                    </a></th>
                </tr>
            </thead>
            <tfoot class="thead-dark">
                <tr>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["nombre"] . "</td>";
                    echo "<td>" . $fila["fecha"] . "</td>";
                    echo "<td>" . $fila["total"] . "</td>";
                    echo "<td>
                            <a class='btn btn-info' href='detalle_factura.php?id=" . $fila["id_factura"] . "'>Detalle</a>
                            <a class='btn btn-warning' href='actualizar_factura.php?id=" . $fila["id_factura"] . "'>Actualizar</a>
                            <a class='btn btn-danger' href='op_eliminar_factura.php?id=" . $fila["id_factura"] . "'>Eliminar</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="index.php">Volver</a>
    </div>
</body>
</html>

<?php
// Cerrar la conexión
$conexion->close();
?>
