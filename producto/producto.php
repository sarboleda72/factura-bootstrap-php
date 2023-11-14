<?php
// Conexion a la base de datos
include ('../bd/conexion.php');
include('../scripts/head.php');


// Consulta SQL para obtener todos los clientes
$query = "SELECT * FROM producto";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Producto</title>
        <!-- Agregar enlaces CDN de Bootstrap -->        
    </head>

    <body class="container mt-3">
        <h3>PRODUCTO</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                    <a href='crear_producto.php' class='btn btn-success'>
                        <i class="fas fa-plus"></i> Añadir Producto
                    </a>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td>Acciones</td>
                </tr>
            </tfoot>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["nombre"] . "</td>";
                    echo "<td>" . $fila["precio"] . "</td>";
                    echo "<td><a class='btn btn-info' href='actualizar_producto.php?id=" . $fila["id_producto"] . "'>Actualizar</a> <a class='btn btn-danger' href='op_eliminar_producto.php?id=" . $fila["id_producto"] . "'>Eliminar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>

    </html>
    <?php
} else {
    echo "No hay productos en la base de datos. ¿<a class='btn btn-primary' href='crear_producto.php'>Desea crear uno nuevo</a>?";
}

// Cerrar la conexión
$conexion->close();
?>
