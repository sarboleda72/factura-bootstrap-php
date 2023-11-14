<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('../bd/conexion.php');

if ($conexion->connect_error) {
    die("Error en la Conexión: " . $conexion->connect_error);
}

$id_cliente = $_GET['id'];

// Eliminar detalles de factura asociados al cliente en la tabla detalle_factura
$queryEliminarDetallesFactura = "DELETE FROM detalle_factura WHERE id_factura IN (SELECT id_factura FROM factura WHERE id_cliente = '$id_cliente')";
if ($conexion->query($queryEliminarDetallesFactura) === true) {
    echo "<script>alert('Detalles de factura asociados al cliente eliminados correctamente. ');</script>";
} else {
    echo "Error al eliminar detalles de factura asociados: " . mysqli_error($conexion);
    $conexion->close();
    exit();
}

// Eliminar facturas asociadas al cliente en la tabla factura
$queryEliminarFacturas = "DELETE FROM factura WHERE id_cliente = '$id_cliente'";
if ($conexion->query($queryEliminarFacturas) === true) {
    echo "<script>alert('Facturas asociadas al cliente eliminadas correctamente. ');</script>";
} else {
    echo "Error al eliminar las facturas asociadas: " . mysqli_error($conexion);
    $conexion->close();
    exit();
}

// Ahora puedes intentar eliminar el cliente
$queryEliminarCliente = "DELETE FROM cliente WHERE id_cliente = '$id_cliente'";
if ($conexion->query($queryEliminarCliente) === true) {
    echo "<script>alert('Cliente Eliminado con Éxito. ');</script>";
    echo "<script>window.location.href='../cliente.php';</script>";
    exit();
} else {
    echo "Error al Eliminar el Cliente: " . mysqli_error($conexion);
}

$conexion->close();

?>
