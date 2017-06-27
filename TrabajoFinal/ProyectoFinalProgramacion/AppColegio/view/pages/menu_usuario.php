<?php
date_default_timezone_set("America/Lima");
require_once '../controller/UsuarioListaController.php';
require_once '../controller/UsuarioTipoListaController.php';
$reusu=new UsuarioDAO();
$usuario = new UsuarioListaController();
$tusuario = new UsuarioTipoListaController();
$lista = $usuario->lista();
$tlista = $tusuario->lista();
$userAd=$reusu->userAdmin();
$useractivos=$reusu->userActivo();
$userdesac=$reusu->userDesactivo();
$_SESSION['tipo_usuario'] = $tlista;
$totalusu = count($lista);

require_once 'modal/usuario/create.php';
require_once 'modal/usuario/update.php';
require_once 'modal/usuario/delete.php';
require_once 'modal/usuario/tipousuario.php';
?>


<div class="content-wrapper">
    <!-- Seccion Usuario-->
    <section class="content-header">
        <h1>
            Mantenimiento
            <small>Usuario</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Mantenimiento</a></li>
            <li class="active">Usuario</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="datos_ajax_delete">

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" style="text-align: right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dataRegister"><i class='glyphicon glyphicon-plus'></i> Agregar</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#dataTipoUsuario"><i class='ion-android-contacts'></i> Tipos de Usuario</button>
                <br> <br> 
            </div>
        </div>

        <div id="panelito_usuario">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Lista de Usuarios</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>T.Usuario</th>
                                        <th>Nombres</th>
                                        <th>Sexo</th>
                                        <th>Email</th>
                                        <th>Usuario</th>
                                        <th>Password</th>
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
                                        foreach ($lista as $usu_lista) {
                                            if ($usu_lista['estado_usuario'] == 1) {
                                                $estado = "<p style='color:#00a65a'>Activo</p>";
                                            } else {
                                                $estado = "<p style='color:#b71c1c'>Desactivado</p>";
                                            }
                                            $password = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5('hola2016'), base64_decode(str_replace(' ', '+', $usu_lista['password_usuario'])), MCRYPT_MODE_CBC, md5(md5('hola2016'))), "\0"); //Aqui estoy desemcriptando
                                            ?>
                                            <tr>
                                                <td><?= $contador ?></td>
                                                <td><?= $usu_lista['descripcion_tu'] ?></td>
                                                <td><?= $usu_lista['nombre_usuario'] ?></td>
                                                <td><?= $usu_lista['sexo_usuario'] ?></td>
                                                <td><?= $usu_lista['email_usuario'] ?></td>
                                                <td><?= $usu_lista['usu_usuario'] ?></td>
                                                <td><?= $password ?></td>
                                                <td><?= $usu_lista['fregistro_usuario'] ?></td>
                                                <td><?= $estado ?></td>
                                                <td><center><button data-toggle="modal" data-target="#dataUpdate" class="btn btn-info"  
                                                            data-tipousuario="<?= $usu_lista['col_TipoUsuario_id_tipousuario'] ?>"  data-nombre_usuario="<?= $usu_lista['nombre_usuario'] ?>" 
                                                            data-ap_usuario="<?= $usu_lista['ap_usuario'] ?>" data-am_usuario="<?= $usu_lista['am_usuario'] ?>" 
                                                            data-sexo="<?= $usu_lista['sexo_usuario'] ?>" data-email="<?= $usu_lista['email_usuario'] ?>"  
                                                            data-usuario="<?= $usu_lista['usu_usuario'] ?>" data-password="<?= $password ?>" 
                                                            data-fregistro="<?= $usu_lista['fregistro_usuario'] ?>" data-estado="<?= $usu_lista['estado_usuario'] ?>"
                                                            ><i class="glyphicon glyphicon-edit"></i> Modificar</button>
                                            <button data-toggle="modal" data-target="#dataDelete" class="btn btn-danger" data-usuario="<?= $usu_lista['usu_usuario'] ?>"><i class="glyphicon glyphicon-trash"></i> Eliminar</button></center>
                                    </td>
                                        </tr>
                                        <?php
                                        $contador ++;
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="10" style="text-align: center"><h3>No hay registro de Usuarios</h3></td>
                                    </tr> 
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>T.Usuario</th>
                                        <th>Nombres</th>
                                        <th>Sexo</th>
                                        <th>Email</th>
                                        <th>Usuario</th>
                                        <th>Password</th>
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
                    <span class="info-box-icon bg-aqua"><i class="ion-ios-people">&nbsp;</i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total</span>
                        <span class="info-box-number"><p style="font-size: 30px"><?= $totalusu ?></p></span>
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
                        <span class="info-box-text">Administradores</span>
                        <span class="info-box-number"><p style="font-size: 30px"><?= $userAd ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $useractivos ?></p></span>
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
                        <span class="info-box-number"><p style="font-size: 30px"><?= $userdesac ?></p></span>
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

