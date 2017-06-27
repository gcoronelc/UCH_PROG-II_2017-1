<?php
//inicio la sesion
session_start();
// aqui selecciono la localidad con php o zona horaria
date_default_timezone_set("America/Lima");
//aqui verifico si no esta logeado no me dara el acceso al menu principal
if (isset($_SESSION['usu_usuario'])) {
    $usuario = $_SESSION['usu_usuario'];
} else {
    //aqui me redireccionaraa la pagina del login
    header("location: ../index.php");
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>App Colegio</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
        <link rel="stylesheet" href="plugins/morris/morris.css">
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

  
  
  
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!--inicio del contenedor o envoltura -->
        <div class="wrapper">


            <!--inicio del navegador-->

            <header class="main-header">
                <!-- Logo -->
                <a href="?p=menu_principal" class="logo">
                    <!-- Menu de navegacion escondido tamaño de  50x50 pixels -->
                    <span class="logo-mini"><b>A</b>DM</span>
                    <!-- Menu de Navegacion con el menu completo -->
                    <span class="logo-lg"><b><?= $usuario ?></b></span>
                </a>
                <!-- Inicio de nav -->
                <nav class="navbar navbar-static-top">
                    <!-- Icono amburgesa para el menu-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">X</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Usted tiene X mensajes</li>
                                    <li>

                                        <ul class="menu">
                                            <li><!-- inicio de mensaje -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Sub director
                                                        <small><i class="fa fa-clock-o"></i> 5 min</small>
                                                    </h4>
                                                    <p>Solicitud de relacion de alumnos...</p>
                                                </a>
                                            </li>
                                            <!--  fin de mensaje -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">Ver todos los mensajess</a></li>
                                </ul>
                            </li>
                            <!-- Notificaciones -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">X</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Tiene X notificaciones</li>
                                    <li>

                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 Alumnos registrados
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Notificaciones de alerta
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 5 Usuarios nuevos
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-red"></i> Usted cambió su contraseña
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">Ver todas las notificaciones</a></li>
                                </ul>
                            </li>

                            <!-- Menu de Usuarios -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?= $usuario ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Imagen de Usuario -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Usuario - <?= $usuario ?>
                                            <small>Hoy:<?= date("h:i:s A"); ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Mi Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="../controller/CerrarSessionController.php" class="btn btn-default btn-flat">Salir del Sistema</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--fin de navegador-->

            <!-- Menu en el lado derecho de la pagina-->
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?= $usuario ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- Formulario Buscar -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- Menu de navegacion -->
                    <ul class="sidebar-menu">
                        <li class="header">NAVEGACIÓN PRINCIPAL</li>
                        <li class="<?php echo $pagina == 'menu_principal' ? 'active' : ''; ?>">
                            <a href="?p=menu_principal">
                                <i class="fa fa-th"></i> <span>Tablero</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-green">new</small>
                                </span>
                            </a>
                        </li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa ion-android-settings"></i> <span>Mantenimiento</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $pagina == 'menu_usuario' ? 'active' : ''; ?>"><a href="?p=menu_usuario"><i class="fa ion-person"></i> Usuario</a></li>
                                <li class="<?php echo $pagina == 'docente' ? 'active' : ''; ?>"><a href="?p=docente"><i class="fa ion-ios-people"></i> Docente</a></li>
                                <li class="<?php echo $pagina == 'curso' ? 'active' : ''; ?>"><a href="?p=curso"><i class="fa ion-ios-compose"></i> Curso</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- fin de la seccion de sidebar -->
            </aside>



