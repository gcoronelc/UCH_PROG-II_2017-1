
<div class="modal fade " id="dataTipoUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form id="addtipoUsuario">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="hidden" id="usu_usuario" name="usu_usuario">
                    <h2 class="text-center text-muted">Tipos de Usuario</h2>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="txtTipoUsuario">Descripcion</label>
                                <input type="text" class="form-control" id="txtNombre" name="txtTipoUsuario" placeholder="Descripcion de Tipo de usuario" required>
                                <br><div id="error_mensaje_tu"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="modulo">Permisos para los siguientes modulos:</label>
                                <br>
                                <center>
                                    <table>
                                        <tr>
                                            <td style="padding-bottom:10px;"><input type="checkbox" name="seguridad" value="1"> Seguridad<br></td>
                                            <td style="padding-left: 90px;padding-bottom:10px;"><input type="checkbox" name="planificacion" value="1"> Planificacion de Año Ecolar<br></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:10px;"><input type="checkbox" name="matriula" value="1" checked> Ventas / Matricula<br></td>
                                            <td style="padding-left: 90px;padding-bottom:10px;"><input type="checkbox" name="reporte" value="1" > Consultas y Reportes<br></td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="control-label" >Lista de Tipos de Usuario</label>
                            <table id="#" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Descripcion</th>
                                        <th>M.Seg.</th>
                                        <th>M.P.Esc.</th>
                                        <th>M.V.Mat.</th>
                                        <th>M.C.Rep.</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cont = 1;
                                    $seguridad = "";
                                    $planificacion = "";
                                    $matricula = "";
                                    $reporte = "";
                                    foreach ($tlista as $value) {
                                        if ($value['seguridad_tu'] == 1) {
                                            $seguridad = "<i class='ion-checkmark-circled' style='color:green'></i>";
                                        } else {
                                            $seguridad = "<i class='ion-android-remove-circle' style='color:red'></i>";
                                        }
                                        if ($value['planificacion_tu'] == 1) {
                                            $planificacion = "<i class='ion-checkmark-circled' style='color:green'></i>";
                                        } else {
                                            $planificacion = "<i class='ion-android-remove-circle' style='color:red'></i>";
                                        }
                                        if ($value['matricula_tu'] == 1) {
                                            $matricula = "<i class='ion-checkmark-circled' style='color:green'></i>";
                                        } else {
                                            $matricula = "<i class='ion-android-remove-circle' style='color:red'></i>";
                                        }
                                        if ($value['reportes_tu'] == 1) {
                                            $reporte = "<i class='ion-checkmark-circled' style='color:green'></i>";
                                        } else {
                                            $reporte = "<i class='ion-android-remove-circle' style='color:red'></i>";
                                        }
                                        ?>

                                        <tr>
                                            <td><?= $cont ?></td>
                                            <td><?= $value['descripcion_tu'] ?></td>
                                            <td style="text-align: center;"><?= $seguridad ?></td>
                                            <td style="text-align: center;"><?= $planificacion ?></td>
                                            <td style="text-align: center;"><?= $matricula ?></td>
                                            <td style="text-align: center;"><?= $reporte ?></td>
                                            <td>
                                    <center>
                                        <button data-toggle="modal" data-target="#eliminarTU" class="btn btn-danger" data-descripcion="<?= $value['descripcion_tu'] ?>" data-tusuario="<?= $value['descripcion_tu'] ?>"><i class="glyphicon glyphicon-trash"></i> </button>
                                    </center>
                                    </td>
                                    </tr>
                                    <?php
                                    $cont++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>


<div class="modal fade" id="eliminarTU" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <form id="eliminarUsuarioTU">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="hidden" id="txtDescripcionTU" name="txtDescripcionTU">
                    <h2 class="text-center text-muted">¿Estas seguro?</h2>
                </div>
                <div class="modal-body">
                    <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro.¿Deseas continuar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-lg btn-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </form>
</div>


