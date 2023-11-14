<?php
// conexion a la base de datos
include ('../bd/conexion.php');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id_detalle = $_GET['id'];
$id_factura = $_GET['idf'];

$query = "DELETE FROM detalle_factura WHERE id_detalle = $id_detalle";
$resultado = $conexion->query($query);

$query = "UPDATE `factura` SET `total`= (SELECT SUM(`total_linea`) FROM `detalle_factura` WHERE `id_factura` = $id_factura) WHERE `id_factura` = $id_factura; ";
$resultado = $conexion->query($query);

if ($conexion->query($query) === TRUE) {
    echo "producto eliminado con éxito";
    header('location: detalle_factura.php?id='.$id_factura);
    exit(); // Es importante agregar exit() para asegurarte de que el script se detenga aquí y no continúe ejecutándose.
} else {
    echo "Error al eliminar el producto: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>