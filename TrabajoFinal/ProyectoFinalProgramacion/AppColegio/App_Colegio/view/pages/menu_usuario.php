<?php
session_start();
require_once '../controller/UsuarioListaController.php';
require_once '../controller/UsuarioTipoListaController.php';
$usuario = new UsuarioListaController();
$tusuario = new UsuarioTipoListaController();
$lista = $usuario->lista();
$tlista = $tusuario->lista();
$_SESSION['tipo_usuario'] = $tlista;
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
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Nuevo Usuario</h3>
                    </div>

                    <form id="formulario_nuevo_usuario">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="txtTipoUsuario">Tipo de Usuario</label>
                                <select class="form-control" name="txtTipoUsuario" id="txtTipoUsuario" >
                                    <?php foreach ($tlista as $value) {
                                        ?>
                                        <option value="<?= $value['id_tipousuario'] ?>"><?= $value['descripcion_tu'] ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="txtNombre">Nombre</label>
                                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" >
                            </div>
                            <div class="form-group">
                                <label for="txtAPaterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="txtAPaterno" name="txtAPaterno" placeholder="Apellido Paterno" >
                            </div>
                            <div class="form-group">
                                <label for="txtAMaterno">Apellido Materno</label>
                                <input type="text" class="form-control" id="txtAMaterno" name="txtAMaterno" placeholder="Apellido Materno" >
                            </div>
                            <div class="form-group">
                                <label >Sexo</label><br>
                                <label>
                                    <input type="radio" name="sexo" value="M" class="minimal" checked="checked">&nbsp;&nbsp; Maculino &nbsp;&nbsp;
                                </label>
                                <label>
                                    <input type="radio" name="sexo" value="F" class="minimal" >&nbsp;&nbsp; Femenino
                                </label>

                            </div>
                            <div class="form-group">
                                <label for="txtEmail">Email</label>
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Correo electronico" >
                            </div>
                            <div class="form-group">
                                <label for="txtUsuario">Usuario</label>
                                <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Nombre de Usuario" >
                            </div>
                            <div class="form-group">
                                <label for="txtPassword">Password</label>
                                <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" >
                            </div>
                            <div class="form-group">
                                <label for="txtPassword2">Vuelva a escribir el password</label>
                                <input type="password" class="form-control" id="txtPassword2" name="txtPassword2" placeholder="Password" >
                            </div>
                        </div>
                        <div class="box-footer" style="text-align: right;">
                            <button type="reset" class="btn btn-default pull-left">Cancelar</button>
                            <button type="submit" class="btn btn-primary pull-righ">Crear nuesvo usuario</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header">

                        <form id="formulario_buscar_usuario">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ingrese el usuario a buscar..." name="txtBuscar">
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="submit">buscar</button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                    </div>
                    <div id="respuesta_busqueda_usuario">
                       
                    </div>
                </div>
            </div>
        </div>
        <div id="update_lista_usuario">

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
                                                <td><center><a href="../controller/UsuarioDeleteController.php?usu=<?= $usu_lista['usu_usuario']; ?>" style="color:#b71c1c"><i class="icon ion-trash-a"></i></a></center></td>
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

    </section>

</div>
<!-- /.box -->

<!--modal respuesta registro de usuario exitoso-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
            </div>
            <div class="modal-body">
                Se ha registrado con exito.
            </div>
            <div class="modal-footer">
                <!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <button type="button" id="btnNuevoUsuario" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
            </div>
            <div class="modal-body">
                Las contraseñas no coinciden.
            </div>
            <div class="modal-footer">
                <!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
            </div>
            <div class="modal-body">
                La contraseña debe tener por lo menos 8 caracteres.
            </div>
            <div class="modal-footer">
                <!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Alerta</h4>
            </div>
            <div class="modal-body">
                Este nombre de usuario ya se encuentra registrado.
            </div>
            <div class="modal-footer">
                <!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Alerta</h4>
            </div>
            <div class="modal-body">
                Ups!, hemos tenido un problema estamos trabajando en ellos, puede volver a intentarlo ma starde. Gracias!
            </div>
            <div class="modal-footer">
                <!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Alerta</h4>
            </div>
            <div class="modal-body">
                Ups!, el password debe tener al menos un caracter numérico.
            </div>
            <div class="modal-footer">
                <!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Alerta</h4>
            </div>
            <div class="modal-body">
                Ups!, el password debe tener al menos una letra.
            </div>
            <div class="modal-footer">
                <!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>