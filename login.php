<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Inicio de sesión</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Inicio de sesión</h1>
                  </div>
                  <form name="login" action="usuarios/login.php" method="POST">
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
                      <button type="submit" class="btn bg-secondary float-end text-white w-100">Iniciar sesión</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register.php">Crear cuenta</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>