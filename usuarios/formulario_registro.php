<?php
    include('../scripts/head.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</head>

<body>
    <div id="template-bg-1">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="card p-4 text-light bg-dark mb-5">
                <div class="card-header">
                    <h3>Crear Una Cuenta </h3>
                </div>
                <div class="card-body w-100">
                    <form name="login" action="registro.php" method="POST">
                        <div class="input-group form-group mt-3">
                            <div class="bg-secondary rounded-start">
                                <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="input-group form-group mt-3">
                            <div class="bg-secondary rounded-start">
                                <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                        </div>
                        <div class="input-group form-group mt-3">
                            <div class="bg-secondary rounded-start">
                                <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Correo Electrónico" name="email">
                        </div>
                        <div class="input-group form-group mt-3">
                            <div class="bg-secondary rounded-start">
                                <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Contraseña" name="contrasena">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn bg-secondary float-end text-white w-100">Registrarse
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        <div class="text-primary">Si es un usuario registrado,<a href="formulario_login.php">inicie sesión aquí.</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>

</html>