<?php

require '../bd/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $apellido = $_POST['apellido'];
    $contrasena = $_POST['contrasena'];

    $hashed_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (nombre, apellido, email, contrasena) VALUES ('$nombre','$apellido','$email','$hashed_contrasena')";

    if (mysqli_query($conexion, $query)) {
        echo "<script>alert('Usuario creado con éxito');</script>";
        echo "<script>window.location.href='../login.php';</script>";
        exit();
    } else {
        echo "Error: no conectó " . $query . "<br>" . mysqli_error($conexion);
    }
}
$conexion->close();
?>