<?php
require '../bd/conexion.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuarios WHERE email=?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($contrasena, $row['contrasena'])) {
            $_SESSION['nombre']="".$row['nombre']." ".$row['apellido'];
            $_SESSION['usuario'] = $email;
            $_SESSION['accedio']=true;
            header('location: ../index.php');
            exit();
        } else {
            $_SESSION['error'] = "Contraseña incorrecta";
        }
    } else {
        $_SESSION['error'] = "Usuario no encontrado";
    }

    $stmt->close();
}
$conexion->close();
header('location: ../usuarios/formulario_login.php');
exit();
?>
