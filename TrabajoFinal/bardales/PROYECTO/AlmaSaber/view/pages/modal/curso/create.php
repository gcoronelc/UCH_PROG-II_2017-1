<!--modal respuesta registro de usuario exitoso-->
<div class="modal fade" id="dataRegisterCUR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form id="formulario_nuevo_curso">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-center text-muted">Nuevo Curso</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="box-body">
                                <div class="form-group">
                                    <label class="control-label" for="txtCodigoDocente">Codigo</label>
                                    <input type="text" maxlength="8" class="form-control" id="txtCodigoCurso" name="txtCodigoCurso" value="CUR-0" REQUIRED>
                                </div>
                                
                                <div class="form-group">
                                    <div id="respuesta_crear_cur_codigo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtDni">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombrecur" name="txtNombre" placeholder="Nombre del Curso" REQUIRED>
                                </div>
                                <div class="form-group">
                                    <div id="respuesta_crear_cur_nombre">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txtNombre">Descripcion</label>
                                    <input type="text" maxlength="300" class="form-control" id="txtDescripcioncur" name="txtDescripcion" placeholder="Pequeña descripcion del curso" REQUIRED>
                                </div>
                                <div class="form-group">
                                    <label for="txtDocente">Selecccione el docente que dictara este curso</label>
                                    <select name="txtDocente" class="form-control">
                                        <?php
                                        foreach ($listadocente as $cur_lista) {
                                            ?>  
                                        <option value="<?= $cur_lista['id_docente']?>"><?= $cur_lista['nombre_docente']." ".$cur_lista['ap_docente']." ".$cur_lista['am_docente'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div id="respuesta_crear_curso">
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-lg btn-primary pull-righ">Crear</button>

                </div>

            </div>
        </div>
    </form>
</div>

