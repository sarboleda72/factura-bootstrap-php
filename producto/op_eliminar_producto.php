<?php
// conexion a la base de datos
include('../bd/conexion.php');
include('../usuarios/variable_sesion.php');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id_producto = $_GET['id'];

$query = "DELETE FROM producto WHERE id_producto = '$id_producto'";

if ($conexion->query($query) === TRUE) {

    echo "<script>alert('Producto Eliminado con Éxito ');</script>";
    echo "<script>window.location.href='../producto.php';</script>";
    exit(); // Es importante agregar exit() para asegurarte de que el script se detenga aquí y no continúe ejecutándose.
} else {
    echo "Error al eliminar el producto: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>