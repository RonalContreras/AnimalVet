<?php
include ('../app/config.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo APP_NAME ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?php echo $URL; ?>/Templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet"
        href="<?php echo $URL; ?>/Templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="<?php echo $URL; ?>/Templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo $URL; ?>/Login/login.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-border">
            <div class="card-header text-center">
                <a href="../index.html" class="h1"><b>Animal</b><span class="font-weight-bold"
                        style="color: #009970">Vet</span></a>
            </div>
            <div class="card-body">
                <img src="<?php echo $URL ?>/Images/login.jpg" alt="login-logo">

                <form action="<?php echo $URL; ?>/app/controllers/login/controller_login.php" method="post">
                    <label for="">Correo electronico</label>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <label for="">Contraseña</label>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success login-button mb-3">Ingresar</button>
                </form>

                <p class="mb-1">
                    <a href="<?php echo $URL ?>/Templeates/AdminLTE-3.2.0/pages/examples/forgot-password-v2.html">Olvide
                        mi
                        contraseña</a>
                </p>
                <p class="mb-0">
                    <a href="<?php echo $URL ?>/Login/registro.php" class="text-center">Registrarse</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo $URL; ?>/Templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $URL; ?>/Templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $URL; ?>/Templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>

</html>