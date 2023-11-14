<?php
// Conexión a la base de datos
include ('../bd/conexion.php');

// Función para obtener una opción de cliente por ID
function obtenerClientePorID($conexion, $clienteID) {
    $query = "SELECT * FROM cliente WHERE id_cliente = '$clienteID'";
    $resultado = $conexion->query($query);
    
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        return "<option value='" . $fila['id_cliente'] . "'>" . $fila['nombre'] . "</option>";
    } else {
        return "No se encontró ningún cliente con el ID especificado.";
    }
}

if (isset($fila["id_cliente"])) {
    echo obtenerClientePorID($conexion, $fila["id_cliente"]);
}

$query_select = "SELECT * FROM cliente";
$resultado_select = $conexion->query($query_select);

if ($resultado_select->num_rows > 0) {
    while ($fila_select = $resultado_select->fetch_assoc()) {
        echo "<option value='" . $fila_select["id_cliente"] . "'>" . $fila_select["nombre"] . "</option>";
    }
} else {
    echo "No hay registros en la base de datos.";
}

// Cerrar la conexión
$conexion->close();
?>