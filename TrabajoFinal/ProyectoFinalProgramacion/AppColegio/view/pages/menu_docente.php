<?php
date_default_timezone_set("America/Lima");
require_once '../controller/DocenteListaController.php';
$docente = new DocenteListaController();
$objdoc = new DocenteDAO();

$lista = $docente->lista();
$totaldoc = count($lista);

$dcf = $objdoc->dceF();
$dcm = $objdoc->dceM();
$dceActivo = $objdoc->dceActivo();
$dceDesactivo = $objdoc->dceDesactivo();


require_once 'modal/docente/create.php';
require_once 'modal/docente/update.php';
require_once 'modal/docente/delete.php';
?>


<div class="content-wrapper">
    <!-- Seccion Usuario-->
    <section class="content-header">
        <h1>
            Mantenimiento
            <small>Docente</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Mantenimiento</a></li>
            <li class="active">Docente</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="datos_ajax_delete">

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" style="text-align: right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dataRegisterDC"><i class='glyphicon glyphicon-plus'></i> Agregar</button>
                <br> <br> 
            </div>
        </div>

        <div id="panelito_usuario">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Lista de Docentes</h3>
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
                                        <th>Nombres</th>
                                        <th>Sexo</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Celular</th>
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
                                        foreach ($lista as $doc_lista) {
                                            if ($doc_lista['estado_docente'] == 1) {
                                                $estado = "<p style='color:#00a65a'>Activo</p>";
                                            } else {
                                                $estado = "<p style='color:#b71c1c'>Desactivado</p>";
                                            }
                                            ?>
                                            <tr>
                                                <td><?= $contador ?></td>
                                                <td><?= $doc_lista['codigo_docente'] ?></td>
                                                <td><?= $doc_lista['dni_docente'] ?></td>
                                                <td><?= $doc_lista['nombre_docente'] ?></td>
                                                <td><?= $doc_lista['sexo_docente'] ?></td>
                                                <td><?= $doc_lista['email_docente'] ?></td>
                                                <td><?= $doc_lista['telefono_docente'] ?></td>
                                                <td><?= $doc_lista['celular_docente'] ?></td>
                                                <td><?= $doc_lista['fregistro_docente'] ?></td>
                                                <td><?= $estado ?></td>
                                                <td><center><button data-toggle="modal" data-target="#dataUpdateDC" class="btn btn-info"  
                                                            data-codigo_docente="<?= $doc_lista['codigo_docente'] ?>"  data-dni_docente="<?= $doc_lista['dni_docente'] ?>" 
                                                            data-nombre_docente="<?= $doc_lista['nombre_docente'] ?>" data-ap_docente="<?= $doc_lista['ap_docente'] ?>" 
                                                            data-am_docente="<?= $doc_lista['am_docente'] ?>" data-sexo_docente="<?= $doc_lista['sexo_docente'] ?>"  
                                                            data-email_docente="<?= $doc_lista['email_docente'] ?>" data-telefono_docente="<?= $doc_lista['telefono_docente'] ?>" 
                                                            data-celular_docente="<?= $doc_lista['celular_docente'] ?>" data-fregistro_docente="<?= $doc_lista['fregistro_docente'] ?>" 
                                                            data-estado_docente="<?= $doc_lista['estado_docente'] ?>"
                                                            ><i class="glyphicon glyphicon-edit"></i> Modificar</button>
                                            <button data-toggle="modal" data-target="#dataDeleteDC" class="btn btn-danger" data-codigo_docente="<?= $doc_lista['codigo_docente'] ?>"><i class="glyphicon glyphicon-trash"></i> Eliminar</button></center>
                                        </td>
                                        </tr>
                                        <?php
                                        $contador ++;
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="10" style="text-align: center"><h3>No hay registro de Docentes</h3></td>
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
                                        <th>Nombres</th>
                                        <th>Sexo</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Celular</th>
                                        <th>F.Registro</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                    </tr>
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
                    <span class="info-box-icon bg-aqua"><i class="ion-ios-people">&nbsp;</i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total</span>
                        <span class="info-box-number"><p style="font-size: 30px"><?= $totaldoc ?></p></span>
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
                        <span class="info-box-text">Docentes H Y M </span>
                        <span class="info-box-number"><p style="font-size: 16px"><?= $dcf . " Mujeres <br>" . $dcm . " Hombres" ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $dceActivo ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $dceDesactivo ?></p></span>
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
