<?php
// Conexión a la base de datos
include ('./bd/conexion.php');



$query_select = "SELECT * FROM cliente";
$resultado_select = $conexion->query($query_select);

if ($resultado_select->num_rows > 0) {
    while ($fila_select = $resultado_select->fetch_assoc()) {
        echo "<option value='" . $fila_select["id_cliente"] . "'>" . $fila_select["nombre"] . "</option>";
    }
} else {
    echo "No hay registros en la base de datos.";
}
?>