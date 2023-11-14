<?php
include ('../bd/conexion.php');

$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$query = "UPDATE cliente SET nombre = '$nombre', direccion = '$direccion', telefono = '$telefono' WHERE id_cliente = '$id_cliente'";

if ($conexion->query($query) == true){
    echo "<script>alert('Cliente Actualizado con Éxito');</script>";
    echo "<script>window.location.href='../cliente.php';</script>";
    exit();
} else {
    echo "Error al actualizar al Cliente". $conexion->error;
}
//Cerrar la Conexion
$conexion->close();
?>