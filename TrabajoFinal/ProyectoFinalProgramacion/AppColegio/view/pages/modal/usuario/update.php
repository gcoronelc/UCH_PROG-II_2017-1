
<!--modal respuesta registro de usuario exitoso-->
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form id="actualizarUsuario">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-center text-muted modal-title">Modificar</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="box-body">
                                <div class="form-group">
                                    <label class="control-label" for="txtFregistro">Fech. Registro</label>
                                    <input type="text" class="form-control" id="txtFregistro" name="txtFregistro" placeholder="Nombre" readonly="readonly">
                                </div>
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
                                        <input type="radio" name="sexo" id="chekSexoM" value="M" class="minimal" checked="checked">&nbsp;&nbsp; Maculino &nbsp;&nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" name="sexo" id="chekSexoF" value="F" class="minimal" >&nbsp;&nbsp; Femenino
                                    </label>

                                </div>
                                <div class="form-group">
                                    <label for="txtEmail">Email</label>
                                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Correo electronico" >
                                </div>
                                <div class="form-group">
                                    <label for="txtUsuario">Usuario</label>
                                    <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <div id="respuesta_modificar_usu_ex">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtPassword">Password</label>
                                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" >
                                </div>
                                <div class="form-group">
                                    <label for="txtPassword2">Vuelva a escribir el password</label>
                                    <input type="password" class="form-control" id="txtPassword2" name="txtPassword2" placeholder="Password" >
                                </div>
                                <div class="form-group">
                                    <label for="txtEstado">Estado de Usuario</label>
                                    <select class="form-control" name="txtEstado" id="txtEstado" >
                                        <option value="1" >Activo</option>
                                        <option value="0" >Desactivado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div id="respuesta_modificar_usu">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-lg btn-primary pull-righ">Guardar Cambios</button>

                </div>

            </div>
        </div>
    </form>
</div>

