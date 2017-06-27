<?php
date_default_timezone_set("America/Lima");
require_once '../controller/CronogramaListaController.php';
require_once '../controller/DocenteListaController.php';

$docente = new DocenteListaController();
$cronograma = new CronogramaListaController();
//$objcur = new MatriculaDAO();




$listadocente = $docente->lista();

$lista = $cronograma->lista();

$totalcronograma = count($lista);

$totalDoc = count($listadocente);

//$matActivo = $objcur->matActivo();
//$matDesactivo = $objcur->matDesactivo();


require_once 'modal/matricula/create.php';
require_once 'modal/matricula/update.php';
require_once 'modal/matricula/delete.php';
?>


<div class="content-wrapper">
    <!-- Seccion Usuario-->
    <section class="content-header">
        <h1>
            Matricula
            <small>Pencion</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Matricula</a></li>
            <li class="active">Pencion</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="datos_ajax_delete">

            </div>
        </div>

<!--        <div class="row">
            <div class="col-sm-12" style="text-align: right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dataRegisterMAT"><i class='glyphicon glyphicon-plus'></i> Matricular Alumno</button>
                <br> <br> 
            </div>
        </div>-->

        <div id="panelito_usuario">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Cronograma de Pagos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Matricula</th>
                                        <th>Alumno</th>
                                        <th>Marzo</th>
                                        <th>Abril</th>
                                        <th>Mayo</th>
                                        <th>Junio</th>
                                        <th>Julio</th>
                                        <th>Agosto</th>
                                        <th>Septiembre</th>
                                        <th>Octubre</th>
                                        <th>Noviembre</th>
                                        <th>Diciembre</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if (isset($lista)) {
                                        $contador = 1;
                                        $estado = "";
                                        $codigo = "";
                                        foreach ($lista as $cro_lista) {
                                            if ($codigo == $cro_lista['codigo_matricula']) {
                                                ?>
                                                    
                                                <?php
                                            } else {
                                                $codigo = $cro_lista['codigo_matricula'];
                                                ?>
                                                <tr>
                                                    <td rowspan="2"><?= $contador ?></td>
                                                    <td rowspan="2"><?= $codigo ?></td>
                                                    <td rowspan="2"><?= $cro_lista['nombre_alumno'] . " " . $cro_lista['ap_alumno'] . " " . $cro_lista['am_alumno'] ?></td>

                                                    <td><?= "S/." . $cro_lista['pension_nivel'] ?></td>

                                                </tr>
                                                <tr>

                                                    <td><?= $cro_lista['fvencimiento_cronograma'] ?></td>

                                                </tr>

                                                <?php
                                                $contador ++;
                                            }
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="10" style="text-align: center"><h3>No hay registro de Cronograma</h3></td>
                                        </tr> 
                                        <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Matricula</th>
                                        <th>Alumno</th>
                                        <th>Marzo</th>
                                        <th>Abril</th>
                                        <th>Mayo</th>
                                        <th>Junio</th>
                                        <th>Julio</th>
                                        <th>Agosto</th>
                                        <th>Septiembre</th>
                                        <th>Octubre</th>
                                        <th>Noviembre</th>
                                        <th>Diciembre</th>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $totalcronograma ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= "-" ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= "-" ?></p></span>
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


