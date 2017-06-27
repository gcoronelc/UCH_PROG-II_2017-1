<?php
date_default_timezone_set("America/Lima");
require_once '../controller/MatriculaListaController.php';
require_once '../controller/DocenteListaController.php';
require_once '../dao/GradoDAO.php';

$grado= new GradoDAO();
$docente=new DocenteListaController();
$matricula = new MatriculaListaController();
$objcur = new MatriculaDAO();


$listagrado=$grado->readAllGradoActivo();

$listadocente=$docente->lista();

$lista = $matricula->lista();

$totalmat = count($lista);

$totalDoc= count($listadocente);

$matActivo = $objcur->matActivo();
$matDesactivo = $objcur->matDesactivo();


require_once 'modal/matricula/create.php';
require_once 'modal/matricula/update.php';
require_once 'modal/matricula/delete.php';
?>


<div class="content-wrapper">
    <!-- Seccion Usuario-->
    <section class="content-header">
        <h1>
            Matricula
            <small>Matricula</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Matricula</a></li>
            <li class="active">Matricula</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="datos_ajax_delete">

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" style="text-align: right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dataRegisterMAT"><i class='glyphicon glyphicon-plus'></i> Matricular Alumno</button>
                <br><br> 
            </div>
        </div>

        <div id="panelito_usuario">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Lista de Matriculados</h3>
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
                                        <th>DNI</th>
                                        <th>Alumno</th>
                                        <th>Grado</th>
                                        <th>Seccion</th>
                                        <th>Nivel</th>
                                        <th>Turno</th>
                                        <th>Pension</th>
                                        <th>Horario</th>
                                        <th>Matricula</th>
                                        <th>F.Registro</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($lista)) {
                                        $contador = 1;
                                        $estado = "";
                                        foreach ($lista as $mat_lista) {
                                            if ($mat_lista['estado_matricula'] == 1) {
                                                $estado = "<p style='color:#00a65a'>Activo</p>";
                                            } else {
                                                $estado = "<p style='color:#b71c1c'>Desactivado</p>";
                                            }
                                            ?>
                                            <tr>
                                                <td><?= $contador ?></td>
                                                <td><?= $mat_lista['codigo_matricula'] ?></td>
                                                <td><?= $mat_lista['dni_alumno'] ?></td>
                                                <td><?= $mat_lista['nombre_alumno']." ".$mat_lista['ap_alumno']." ".$mat_lista['am_alumno'] ?></td>
                                                <td><?= $mat_lista['grado_grado'] ?></td>
                                                <td><?= $mat_lista['nombre_seccion'] ?></td>
                                                <td><?= $mat_lista['descripcion_nivel'] ?></td>
                                                <td><?= $mat_lista['descripcion_turno'] ?></td>
                                                <td><?= "S/.".$mat_lista['pension_nivel'] ?></td>
                                                <td><?= $mat_lista['horario_turno'] ?></td>
                                                <td><?= "S/.".$mat_lista['pago_matricula'] ?></td>
                                                <td><?= $mat_lista['fmatricula_matricula'] ?></td>
                                                <td><?= $estado ?></td>
                                                <td><center><button data-toggle="modal" data-target="#dataUpdateMAT" class="btn btn-info"  
                                                            data-codigo_curso="<?= $cur_lista['codigo_curso'] ?>"  data-id_docente="<?= $cur_lista['id_docente'] ?>" 
                                                            data-nombre_curso="<?= $cur_lista['nombre_curso'] ?>" data-descripcion_curso="<?= $cur_lista['descripcion_curso'] ?>" 
                                                            data-fregistro_curso="<?= $cur_lista['fregistro_curso'] ?>" data-estado_curso="<?= $cur_lista['estado_curso'] ?>" 
                                                            ><i class="glyphicon glyphicon-edit"></i> </button>
                                            <button data-toggle="modal" data-target="#dataEliminarMAT" class="btn btn-danger" data-codigo_curso="<?= $cur_lista['codigo_curso'] ?>"><i class="glyphicon glyphicon-trash"></i> </button></center>
                                        </td>
                                        </tr>
                                        <?php
                                        $contador ++;
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="10" style="text-align: center"><h3>No hay registro de Cursos</h3></td>
                                    </tr> 
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Codigo</th>
                                        <th>DNI</th>
                                        <th>Alumno</th>
                                        <th>Grado</th>
                                        <th>Seccion</th>
                                        <th>Nivel</th>
                                        <th>Turno</th>
                                        <th>Pension</th>
                                        <th>Horario</th>
                                        <th>Matricula</th>
                                        <th>F.Registro</th>
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
                    <span class="info-box-icon bg-aqua"><i class="ion-person-stalker">&nbsp;</i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total</span>
                        <span class="info-box-number"><p style="font-size: 30px"><?= $totalmat ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $totalDoc ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $matActivo ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $matDesactivo ?></p></span>
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


