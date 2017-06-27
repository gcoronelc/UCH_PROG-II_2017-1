<?php
date_default_timezone_set("America/Lima");
require_once '../controller/CursoListaController.php';
require_once '../controller/DocenteListaController.php';

$docente=new DocenteListaController();
$curso = new CursoListaController();
$objcur = new CursoDAO();




$listadocente=$docente->lista();

$lista = $curso->lista();

$totalcur = count($lista);

$totalDoc= count($listadocente);

$curActivo = $objcur->curActivo();
$curDesactivo = $objcur->curDesactivo();


require_once 'modal/curso/create.php';
require_once 'modal/curso/update.php';
require_once 'modal/curso/delete.php';
?>


<div class="content-wrapper">
    <!-- Seccion Usuario-->
    <section class="content-header">
        <h1>
            Mantenimiento
            <small>Curso</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Mantenimiento</a></li>
            <li class="active">Curso</li>
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
                    <h3 class="box-title">Lista de Cursos</h3>
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
                                        <th>Docente</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
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
                                        foreach ($lista as $cur_lista) {
                                            if ($cur_lista['estado_curso'] == 1) {
                                                $estado = "<p style='color:#00a65a'>Activo</p>";
                                            } else {
                                                $estado = "<p style='color:#b71c1c'>Desactivado</p>";
                                            }
                                            ?>
                                            <tr>
                                                <td><?= $contador ?></td>
                                                <td><?= $cur_lista['codigo_curso'] ?></td>
                                                <td><?= $cur_lista['nombre_docente']." ".$cur_lista['ap_docente']." ".$cur_lista['am_docente'] ?></td>
                                                <td><?= $cur_lista['nombre_curso'] ?></td>
                                                <td><?= $cur_lista['descripcion_curso'] ?></td>
                                                <td><?= $cur_lista['fregistro_curso'] ?></td>
                                                <td><?= $estado ?></td>
                                                <td><center><button data-toggle="modal" data-target="#dataUpdateCUR" class="btn btn-info"  
                                                            data-codigo_curso="<?= $cur_lista['codigo_curso'] ?>"  data-id_docente="<?= $cur_lista['id_docente'] ?>" 
                                                            data-nombre_curso="<?= $cur_lista['nombre_curso'] ?>" data-descripcion_curso="<?= $cur_lista['descripcion_curso'] ?>" 
                                                            data-fregistro_curso="<?= $cur_lista['fregistro_curso'] ?>" data-estado_curso="<?= $cur_lista['estado_curso'] ?>" 
                                                            ><i class="glyphicon glyphicon-edit"></i> Modificar</button>
                                            <button data-toggle="modal" data-target="#dataEliminarCUR" class="btn btn-danger" data-codigo_curso="<?= $cur_lista['codigo_curso'] ?>"><i class="glyphicon glyphicon-trash"></i> Eliminar</button></center>
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
                                        <th>Docente</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
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
                    <span class="info-box-icon bg-aqua"><i class="ion-ios-book">&nbsp;</i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total</span>
                        <span class="info-box-number"><p style="font-size: 30px"><?= $totalcur ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $curActivo ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $curDesactivo ?></p></span>
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


