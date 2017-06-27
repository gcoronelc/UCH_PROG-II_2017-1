<?php
//inicio la sesion
session_start();
// aqui selecciono la localidad con php o zona horaria
date_default_timezone_set("America/Lima");
//aqui verifico si el usuario esta logeado y quiere logearse nuevamente 
if (isset($_SESSION['usu_usuario'])) {
    //lo redireccionaremos al menu principal
    header("location: menu.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="plugins/iCheck/square/blue.css">  
        <!-- Framework de fonst http://fontawesome.io/ -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- este es un framewok de iconos  http://ionicons.com/ -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Alma del </b>SABER</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Ingresar al sistema</p>
                <form id="formulario_login">
                    <div class="form-group has-feedback">
                        <input type="text" name="txtUsuario" class="form-control" placeholder="Usuario" REQUIRED>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="txtPassword" class="form-control" placeholder="Contraseña" REQUIRED>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Recordarme
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                        </div><!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col-xs-12" id="respuesta" style="display: none">
                            <div  class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p>Verifique su usuario o contraseña.</p>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- ó -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Logueate con Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Logueate con Google+</a>
                </div><!-- /.social-auth-links -->

                <a href="#">Olvidé mi contraseña</a><br>
                <a href="#" class="text-center">¿Necesitas Ayuda?</a>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/code.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
