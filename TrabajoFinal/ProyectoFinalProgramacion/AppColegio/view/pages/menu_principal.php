<?php
require_once '../controller/UsuarioListaController.php';
require_once '../controller/MatriculaListaController.php';
require_once '../controller/DocenteListaController.php';
require_once '../controller/CursoListaController.php';

$usuario = new UsuarioListaController();
$matricula = new MatriculaListaController();
$docente = new DocenteListaController();
$curso = new CursoListaController();

$listausuarios = $usuario->lista();
$listamatricula = $matricula->lista();
$listadocente = $docente->lista();
$listacurso = $curso->lista();

$cantidadusu = count($listausuarios);
$cantidadmatriculados = count($listamatricula);
$cantidaddocentes = count($listadocente);
$cantidadcursos = count($listacurso);


require_once 'modal/principal/email.php';
?>



<!-- Contenedor del Tablero | panel de control -->
<div class="content-wrapper">
    <!-- Seccion de inciio header del tablero -->
    <section class="content-header">
        <h1>
            Tablero
            <small>Panel de control</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Tablero</li>
        </ol>
    </section>

    <!-- Contenido Principal  -->
    <section class="content">
        <!-- Cuadros de informacion principal -->
        <div class="row">

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= $cantidadusu ?></h3>

                        <p>Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-person"></i>
                    </div>
                    <a href="?p=menu_usuario" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">

                <div class="small-box bg-green">
                    <div class="inner">
<!--                    <h3>53<sup style="font-size: 20px">%</sup></h3>  para porcentaje-->
                        <h3><?= $cantidadcursos ?></h3>
                        <p>Cursos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-bookmarks"></i>
                    </div>
                    <a href="?p=menu_curso" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">

                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?= $cantidadmatriculados ?></h3>

                        <p>Alumnos matriculados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="?p=menu_matricula" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">

                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?= $cantidaddocentes ?></h3>

                        <p>Docentes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-people"></i>
                    </div>
                    <a href="?p=menu_docente" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
        <!-- Cuadros de informacion principal -->


        <!-- Fila nueva -->
        <div class="row">

            <section class="col-lg-7 connectedSortable">
                <div class="box box-info">
                    <form  id="formulario_breve_correo">
                        <div class="box-header">
                            <i class="fa fa-envelope"></i>

                            <h3 class="box-title">Breve correo electrónico</h3>
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">

                            <div class="form-group">
                                <input type="email" class="form-control" name="txtEmail" placeholder="Para" REQUIRED>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="txtAsunto" placeholder="Asunto" REQUIRED>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-default" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                                </button>
                                 <button type="button" class="btn btn-default" aria-label="center Align">
                                    <span class="glyphicon glyphicon-align-center" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default" aria-label="right Align">
                                    <span class="glyphicon glyphicon-align-right" aria-hidden="true"></span>
                                </button>
                               
                            </div>
                            <div>
                                <textarea class="textarea" name="txtMensaje" placeholder="Mensaje" style="width: 100%;max-width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" REQUIRED></textarea>
                            </div>

                        </div>
                        <div class="box-footer clearfix">
                            <button type="submit" class="pull-right btn btn-default" data-target="#" id="sendEmail">Enviar
                                <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </form>
                </div>

            </section>

            <!-- Columna de la Izquierda -->

            <section class="col-lg-5 connectedSortable">

                <div class="box box-solid bg-green-gradient">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>

                        <h3 class="box-title">Calendar</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars"></i></button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Add new event</a></li>
                                    <li><a href="#">Clear events</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">View calendar</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-black">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Progress bars -->
                                <div class="clearfix">
                                    <span class="pull-left">Evento #1</span>
                                    <small class="pull-right">90%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                </div>

                                <div class="clearfix">
                                    <span class="pull-left">Recordatorio #2</span>
                                    <small class="pull-right">70%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="clearfix">
                                    <span class="pull-left">Tarea #3</span>
                                    <small class="pull-right">60%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                </div>

                                <div class="clearfix">
                                    <span class="pull-left">Evento #4</span>
                                    <small class="pull-right">40%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>

            </section>
            <!-- fin de columna  -->
        </div>
        <!-- fin de fila -->

    </section>
    <!-- fin de seccion-->
</div>
