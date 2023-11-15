<?php
// conexion a la base de datos
//Verificacion de Sesion
//include ('../usuarios/variable_sesion.php');
include ('./bd/conexion.php');


// Consulta SQL para obtener todos los facturas
$query = "SELECT factura.id_factura, cliente.nombre, factura.fecha, factura.total FROM factura INNER JOIN cliente ON factura.id_cliente = cliente.id_cliente";
$resultado = $conexion->query($query);

?>
    <div class="container">
        <h3 class="mb-4">FACTURAS</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
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
                    echo "<td>" . number_format($fila["total"], 2, ',', '.') . "</td>";
                    echo "<td>
                            <a class='btn btn-info' href='factura/detalle_factura.php?id=" . $fila["id_factura"] . "'>Detalle</a>
                        ";
                    
                    echo "" . '<button class="btn btn-primary btn-sm btnEditarUsuario" data-id="' . $fila["id_factura"] . '" data-toggle="modal" data-target="#modalActualizarUsuario' . $fila["id_factura"] . '">' . '<i class="material-icons">Editar</i>' . '</button>' . '<button class="btn btn-danger btn-sm btnBorrarUsuario" data-id="' . $fila["id_factura"] . '" data-toggle="modal" data-target="#modalEliminarPersona' . $fila["id_factura"] . '">' . '<i class="material-icons">Eliminar</i>' . '</button>' . "</td>";
                    echo "</tr>";
                    echo '<div class="modal fade" id="modalActualizarUsuario' . $fila["id_factura"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">';
                    include('modal_actualizar.php');
                    echo '</div>';
                    echo '<div class="modal fade" id="modalEliminarPersona' . $fila["id_factura"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">';
                    include('modal_eliminar.php');
                    echo '</div>';
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
// Cerrar la conexión
$conexion->close();
?>
