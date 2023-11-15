<?php
// Conexion a la base de datos
include('./bd/conexion.php');



// Consulta SQL para obtener todos los clientes
$query = "SELECT * FROM producto";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
?>
    <div class="container">
        <h3>PRODUCTO</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["nombre"] . "</td>";
                    echo "<td>" . number_format($fila["precio"], 2, ',', '.') . "</td>";
                    echo "<td>" . '<button class="btn btn-primary btn-sm btnEditarUsuario" data-id="' . $fila["id_producto"] . '" data-toggle="modal" data-target="#modalActualizarUsuario' . $fila["id_producto"] . '">' . '<i class="material-icons">Editar</i>' . '</button>' . '<button class="btn btn-danger btn-sm btnBorrarUsuario" data-id="' . $fila["id_producto"] . '" data-toggle="modal" data-target="#modalEliminarPersona' . $fila["id_producto"] . '">' . '<i class="material-icons">Eliminar</i>' . '</button>' . "</td>";
                    echo "</tr>";
                    echo '<div class="modal fade" id="modalActualizarUsuario' . $fila["id_producto"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">';
                    include('modal_actualizar.php');
                    echo '</div>';
                    echo '<div class="modal fade" id="modalEliminarPersona' . $fila["id_producto"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">';
                    include('modal_eliminar.php');
                    echo '</div>';
                    //include 'modal_actualizar.php';
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
} else {
    echo "No hay productos en la base de datos. ¿<a class='btn btn-primary' href='crear_producto.php'>Desea crear uno nuevo</a>?";
}

// Cerrar la conexión
$conexion->close();
?>