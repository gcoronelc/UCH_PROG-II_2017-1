<?php
date_default_timezone_set("America/Lima");
require_once '../controller/GradoListaController.php';
require_once '../controller/DocenteListaController.php';
require_once '../dao/NivelDAO.php';
require_once '../dao/SeccionDAO.php';
require_once '../dao/TurnoDAO.php';

$nivel = new NivelDAO();
$seccion = new SeccionDAO();
$turno = new TurnoDAO();
$docente = new DocenteListaController();
$grado = new GradoListaController();
$ligra = new GradoDAO();

$listadocente = $docente->lista();

$listaseccion = $seccion->readAllSeccion();
$listaturno = $turno->readAllTurno();
$listanivel = $nivel->readAllNivel();

$lista = $grado->lista();

$totalgrado = count($lista);
$totaldocente = count($listadocente);

$graActivo = $ligra->graActivo();
$graDesactivo = $ligra->graDesactivo();


require_once 'modal/grado/create.php';
require_once 'modal/grado/update.php';
require_once 'modal/grado/delete.php';
?>


<div class="content-wrapper">
    <!-- Seccion Usuario-->
    <section class="content-header">
        <h1>
            Planificacion
            <small>Año escolar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Planificacion</a></li>
            <li class="active">Año escolar</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="datos_ajax_delete">

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" style="text-align: right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dataRegisterCUR"><i class='glyphicon glyphicon-plus'></i> Agregar</button>
                <br> <br> 
            </div>
        </div>

        <div id="panelito_usuario">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Lista de Años Escolares</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Codigo</th>
                                        <th>Grado</th>
                                        <th>Nivel</th>
                                        <th>Seccion</th>
                                        <th>Turno</th>
                                        <th>Max.Alum</th>
                                        <th>Cant.Alum</th>
                                        <th>F.Inicio</th>
                                        <th>Fech.Fin</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($lista)) {
                                        $contador = 1;
                                        $estado = "";
                                        foreach ($lista as $gra_lista) {
                                            if ($gra_lista['estado_grado'] == 1) {
                                                $estado = "<p style='color:#00a65a'>Activo</p>";
                                            } else {
                                                $estado = "<p style='color:#b71c1c'>Desactivado</p>";
                                            }
                                            ?>
                                            <tr>
                                                <td><?= $contador ?></td>
                                                <td><?= $gra_lista['codigo_grado'] ?></td>
                                                <td><?= $gra_lista['grado_grado'] ?></td>
                                                <td><?= $gra_lista['descripcion_nivel'] ?></td>
                                                <td><?= $gra_lista['nombre_seccion'] ?></td>
                                                <td><?= $gra_lista['descripcion_turno'] ?></td>
                                                <td><?= $gra_lista['max_alumno'] ?></td>
                                                <td><?= $gra_lista['cant_alumno'] ?></td>
                                                <td><?= $gra_lista['finicio_grado'] ?></td>
                                                <td><?= $gra_lista['ffin_grado'] ?></td>
                                                <td><?= $estado ?></td>
                                                <td><center><button data-toggle="modal" data-target="#dataUpdateGRA" class="btn btn-info"  
                                                            data-codigo_grado="<?= $gra_lista['codigo_grado'] ?>" 
                                                            data-grado_grado="<?= $gra_lista['grado_grado'] ?>"  data-col_nivel_id_nivel="<?= $gra_lista['col_nivel_id_nivel'] ?>" 
                                                            data-col_Seccion_id_seccion="<?= $gra_lista['col_Seccion_id_seccion'] ?>" data-col_Turno_id_turno="<?= $gra_lista['col_Turno_id_turno'] ?>" 
                                                            data-max_alumno="<?= $gra_lista['max_alumno'] ?>" data-cant_alumno="<?= $gra_lista['cant_alumno'] ?>" 
                                                            data-finicio_grado="<?= $gra_lista['finicio_grado'] ?>" data-ffin_grado="<?= $gra_lista['ffin_grado'] ?>" 
                                                            data-estado_grado="<?= $gra_lista['estado_grado'] ?>" 
                                                            ><i class="glyphicon glyphicon-edit"></i> Modificar</button>
                                            <button data-toggle="modal" data-target="#dataEliminarGRA" class="btn btn-danger" data-codigo_grado="<?= $gra_lista['codigo_grado'] ?>"><i class="glyphicon glyphicon-trash"></i> Eliminar</button></center>
                                        </td>
                                        </tr>
                                        <?php
                                        $contador ++;
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="10" style="text-align: center"><h3>No hay registro de año escolar</h3></td>
                                    </tr> 
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Codigo</th>
                                        <th>Grado</th>
                                        <th>Nivel</th>
                                        <th>Seccion</th>
                                        <th>Turno</th>
                                        <th>Max.Alum</th>
                                        <th>Cant.Alum</th>
                                        <th>F.Inicio</th>
                                        <th>Fech.Fin</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->

        </div>


        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion-university">&nbsp;</i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total</span>
                        <span class="info-box-number"><p style="font-size: 30px"><?= $totalgrado ?></p></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion-person">&nbsp;</i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Docentes</span>
                        <span class="info-box-number"><p style="font-size: 30px"><?= $totaldocente ?></p></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion-heart">&nbsp;</i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Activos</span>
                        <span class="info-box-number"><p style="font-size: 30px"><?= $graActivo ?></p></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion-locked">&nbsp;</i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Desactivados</span>
                        <span class="info-box-number"><p style="font-size: 30px"><?= $graDesactivo ?></p></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>



    </section>

</div>
<!-- /.box -->


