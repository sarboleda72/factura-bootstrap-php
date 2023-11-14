<?php
// conexion a la base de datos
include('../bd/conexion.php');
include('../usuarios/variable_sesion.php');

$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$query = "UPDATE producto SET nombre = '$nombre', precio = '$precio' WHERE id_producto = '$id_producto'";

if ($conexion->query($query) === TRUE) {
    echo "<script>alert('Producto Actualizado con Éxito ');</script>";
    echo "<script>window.location.href='producto.php';</script>";
    exit(); // Es importante agregar exit() para asegurarte de que el script se detenga aquí y no continúe ejecutándose.
} else {
    echo "Error al actualizar el producto: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>