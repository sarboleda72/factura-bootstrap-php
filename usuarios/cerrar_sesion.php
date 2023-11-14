<?php
// Inicia la sesión
session_start();

// Limpia todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige a la página de inicio de sesión o a cualquier otra página
header('Location: login.php');
exit();
?>
