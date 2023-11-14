<?php
// Conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contrasenia = "";
$bd = "factura";

$conexion = new mysqli($host, $usuario, $contrasenia, $bd);

if($conexion->connect_error){
    die("Error de conexión: ". $conexion->connect_error);
} else {
    //echo "Conexion exitosa";
}

?>