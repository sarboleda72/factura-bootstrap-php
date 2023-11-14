<?php
// conexion a la base de datos
include ('../bd/conexion.php');

$id_factura = $_POST['id_factura'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];

$query = "UPDATE factura SET id_cliente = '$nombre', fecha = '$fecha' WHERE id_factura = '$id_factura'";

if ($conexion->query($query) === TRUE) {
    echo "<script>alert('Factura Actualizada con éxito');</script>";
    echo "<script>window.location.href='factura.php';</script>";
    exit(); // Es importante agregar exit() para asegurarte de que el script se detenga aquí y no continúe ejecutándose.
} else {
    echo "Error al actualizar la factura: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>