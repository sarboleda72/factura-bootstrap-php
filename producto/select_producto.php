<?php
// Conexión a la base de datos
include_once('conexion.php');


$query_select = "SELECT * FROM producto";
$resultado_select = $conexion->query($query_select);

if ($resultado_select->num_rows > 0) {
    while ($fila_select = $resultado_select->fetch_assoc()) {
        echo "<option value='" . $fila_select["id_producto"] . "'>" . $fila_select["nombre"] . " - " . $fila_select["precio"] . "</option>";
    }
} else {
    echo "No hay registros en la base de datos.";
}

// Cerrar la conexión
$conexion->close();
?>