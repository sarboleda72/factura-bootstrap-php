<?php
// conexion a la base de datos
include ('../bd/conexion.php');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id_factura = $_GET['id'];

$query = "DELETE FROM detalle_factura WHERE id_factura = '$id_factura'";
$resultado = $conexion->query($query);

$query = "DELETE FROM factura WHERE id_factura = '$id_factura'";
$resultado = $conexion->query($query);

// echo $query;
if ($conexion->query($query) === TRUE) {

    echo "factura eliminada con éxito";
    header('Location: factura.php');
    exit(); // Es importante agregar exit() para asegurarte de que el script se detenga aquí y no continúe ejecutándose.
} else {
    echo "Error al eliminar el factura: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>