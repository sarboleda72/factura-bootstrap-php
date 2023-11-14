<?php
// conexion a la base de datos
include('../bd/conexion.php');
include('../usuarios/variable_sesion.php');

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

//aqui voy a hacer la sentencia SQL
$query = "INSERT INTO producto(nombre, precio) VALUES ('$nombre', '$precio')";

if ($conexion->query($query) === TRUE) {
    echo "<script>alert('Producto Creado con Éxito ');</script>";
    echo "<script>window.location.href='producto.php';</script>";
    exit();
} else {
    echo "Error al crear el producto: ".$conexion->error;
}

//cierre de la conexion
$conexion->close();
?>