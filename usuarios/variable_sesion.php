<?php
session_start();
include ('../bd/conexion.php');

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            window.location = "/factura/usuarios/formulario_login.php";
        </script>
    ';
    session_destroy();
    die();
}
?>
