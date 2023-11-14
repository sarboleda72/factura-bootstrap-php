<?php
//Conexion a la BD
include('./bd/conexion.php');
//include('../usuarios/variable_sesion.php');
include('./scripts/head.php');

//Consulta SQL para obtener todos los clientes
$query = "SELECT * FROM cliente";
$resultado = $conexion->query($query);
?>
<div class="container mt-4">
    <h3>CLIENTES</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila["nombre"] . "</td>";
                echo "<td>" . $fila["direccion"] . "</td>";
                echo "<td>" . $fila["telefono"] . "</td>";
                echo "<td>".'<button class="btn btn-primary btn-sm btnEditarUsuario" data-id="' . $fila["id_cliente"]. '" data-toggle="modal" data-target="#modalActualizarUsuario'.$fila["id_cliente"].'">' .'<i class="material-icons">Editar</i>' .'</button>'.'<button class="btn btn-danger btn-sm btnBorrarUsuario" data-id="' . $fila["id_cliente"] . '" data-toggle="modal" data-target="#modalEliminarPersona'.$fila["id_cliente"].'">' .'<i class="material-icons">Eliminar</i>' .'</button>'."</td>";
                echo "</tr>";
                echo '<div class="modal fade" id="modalActualizarUsuario'. $fila["id_cliente"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">';
                include('modal_actualizar.php');
                echo '</div>';
                echo '<div class="modal fade" id="modalEliminarPersona'.$fila["id_cliente"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">';
                include('modal_eliminar.php');
                echo '</div>';
                
            }
            ?>
        </tbody>
    </table>
</div>