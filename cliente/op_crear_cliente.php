<?php
//Conexion a la Base de Datos
    include ('../bd/conexion.php');
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

//Sentencia SQL 
    $query = "INSERT INTO cliente(nombre, direccion, telefono) VALUES('$nombre', '$direccion', '$telefono')";

    if($conexion->query($query)){
        echo "<script>alert('Cliente creado con éxito');</script>";
        echo "<script>window.location.href='../cliente.php';</script>";
        exit();        
    } else {
        echo "Error al crear al Clinete" .$conexion->error;
    }
    //Cierre de la Conexion
    $conexion->close();
?>