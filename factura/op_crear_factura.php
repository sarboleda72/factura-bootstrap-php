<?php
// conexión a la base de datos
include('../bd/conexion.php');

$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];

// aquí voy a hacer la sentencia SQL
$query = "INSERT INTO factura(id_cliente, fecha) VALUES ('$nombre', '$fecha')";

if ($conexion->query($query) === TRUE) {
    echo "<script>alert('Factura creada con éxito');</script>";
    echo "<script>window.location.href='factura.php';</script>";
    exit();
} else {
    echo "<script>alert('Error al crear la factura: " . $conexion->error . "');</script>";
}

// cierre de la conexión
$conexion->close();
?>
