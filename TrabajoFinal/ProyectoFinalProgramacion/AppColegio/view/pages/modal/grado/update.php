<!--modal respuesta registro de usuario exitoso-->
<div class="modal fade" id="dataUpdateGRA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form id="formulario_modificar_grado">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-center text-muted title">Modificar </h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="box-body">

                                <div class="form-group">
                                    <label class="control-label" for="txtCodigoGradogra">Codigo</label>
                                    <input type="text" maxlength="8" class="form-control" id="txtCodigoGradogra" name="txtCodigoGrado"  readonly="readonly">
                                </div>

                                <div class="form-group">
                                    <div id="respuesta_modificar_cur_codigo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtGrado">Grado</label>
                                    <input type="text" class="form-control" id="txtGradogra" name="txtGrado" placeholder="Grado" REQUIRED>
                                </div>

                                <div class="form-group">
                                    <label for="txtNivel">Nivel</label>
                                    <select name="txtNivel" id="txtNivelgra" class="form-control">
                                        <?php
                                        foreach ($listanivel as $nivel_lista) {
                                            ?>  
                                            <option value="<?= $nivel_lista['id_nivel'] ?>"><?= $nivel_lista['descripcion_nivel'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txtSeccion">Seccion</label>
                                    <select name="txtSeccion" id="txtSecciongra" class="form-control">
                                        <?php
                                        foreach ($listaseccion as $seccion_lista) {
                                            ?>  
                                            <option value="<?= $seccion_lista['id_seccion'] ?>"><?= $seccion_lista['nombre_seccion'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txtTurno">Turno</label>
                                    <select name="txtTurno" id="txtTurnogra" class="form-control">
                                        <?php
                                        foreach ($listaturno as $turno_lista) {
                                            ?>  
                                            <option value="<?= $turno_lista['id_turno'] ?>"><?= $turno_lista['descripcion_turno'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="txtMaxAlum">Maximo de Alumno</label>
                                    <input type="text" class="form-control" id="txtMaxAlumgra" name="txtMaxAlum" placeholder="Nuumero maximo de alumnos" REQUIRED>
                                </div>

                                <div class="form-group">
                                    <label for="txtCantAlum">Cantidad de alumnos matriculados en este grado</label>
                                    <input type="text" class="form-control" id="txtCantAlumgra" name="txtCantAlum" placeholder="Alumnos matriculados" REQUIRED>
                                </div>
                                <div class="form-group">
                                    <label for="txtFechaInicio">Fecha de Inicio</label>
                                    <input type="text" class="form-control" id="txtFechaIniciogra" name="txtFechaInicio" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label for="txtFechaFin">Fecha de Fin</label>
                                    <input type="text" class="form-control" id="txtFechaFingra" name="txtFechaFin"  readonly="readonly">
                                </div>

                                <div class="form-group">
                                    <label for="txtEstadogRADO">Estado del Grado</label>
                                    <select class="form-control" name="txtEstado" id="txtEstadogra" >
                                        <option value="1" >Activo</option>
                                        <option value="0" >Desactivado</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div id="respuesta_modificar_gra">
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-lg btn-primary pull-righ">Guardar</button>

                </div>

            </div>
        </div>
    </form>
</div>

