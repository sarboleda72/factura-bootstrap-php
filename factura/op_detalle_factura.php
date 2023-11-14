<?php
// conexion a la base de datos
include('../bd/conexion.php');

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$idf = $_POST['idf'];

//aqui voy a hacer la sentencia SQL
$query = "SELECT producto.precio FROM producto WHERE producto.id_producto = $producto";
$resultado = $conexion->query($query);
while ($fila = $resultado->fetch_assoc()) {    
    $precio = $fila["precio"];
    $total = $precio*$cantidad;
}
$query = "INSERT INTO `detalle_factura`(`id_factura`, `id_producto`, `cantidad`, `precio_unitario`, `total_linea`) VALUES ('$idf','$producto','$cantidad','$precio','$total')";
$resultado = $conexion->query($query);

$query = "UPDATE `factura` SET `total`= (SELECT sum(`total_linea`) FROM `detalle_factura` WHERE `id_factura` = $idf) WHERE `id_factura` = $idf; ";
$resultado = $conexion->query($query);

if ($conexion->query($query) === TRUE) {
    echo "factura creada con éxito";
    header('location: detalle_factura.php?id='.$idf);
    exit();
} else {
    echo "Error al agregar el producto: ".$conexion->error;
}

// cierre de la conexion
$conexion->close();
?>


?>