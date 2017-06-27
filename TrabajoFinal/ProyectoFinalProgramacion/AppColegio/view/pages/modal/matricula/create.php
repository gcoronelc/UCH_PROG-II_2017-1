<!--modal respuesta registro de usuario exitoso-->
<div class="modal fade" id="dataRegisterMAT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form id="formulario_nuevo_curso">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-center text-muted">Matricular Alumno</h2>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="control-label" for="txtCodigoMatricula">Codigo de Matricula</label>
                                    <input type="text" maxlength="8" class="form-control" id="txtCodigoMatricula" name="txtCodigoMatricula" value="CUR-0" REQUIRED>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="txtDniAlumno">DNI del Alumno</label>
                                    <input type="text" maxlength="8" class="form-control" id="txtDniAlumno" name="txtDniAlumno" placeholder="Ingrese el DNI del alumno" REQUIRED>
                                </div>

                                <div class="form-group">
                                    <div id="respuesta_dni_alumno">
                                    </div>
                                </div>
                                
                                <div id="cargar_busqueda_alumno">
                                <div class="form-group">
                                    <label for="txtNombreAlumno">Nombre del Alumno</label>
                                    <input type="text" class="form-control" id="txtNombreAlumnomat" name="txtNombreAlumno" placeholder="Nombre del Alumno " REQUIRED>
                                </div>
                                <div class="form-group">
                                    <label for="txtApellidoPaterno">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="txtApellidoPaternomat" name="txtApellidoPaterno" placeholder="Apellido Paterno " REQUIRED>
                                </div>
                                <div class="form-group">
                                    <label for="txtApellidoMaterno">Apellido Materno</label>
                                    <input type="text" class="form-control" id="txtApellidoMaternomat" name="txtApellidoMaterno" placeholder="Apellido Materno " REQUIRED>
                                </div>

                                <div class="form-group">
                                    <label for="txtEmailAlumno">Email</label>
                                    <input type="email" class="form-control" id="txtEmailAlumnomat" name="txtEmailAlumno" placeholder="Correo electronico del alumno" REQUIRED>
                                </div>

                                <div class="form-group">
                                    <label for="txtTelefonoAlumno">Telefono</label>
                                    <input type="email" class="form-control" id="txtTelefonoAlumnomat" name="txtTelefonoAlumno" placeholder="Telefono del Alumno" REQUIRED>
                                </div>

                                <div class="form-group">
                                    <label for="txtCelularAlumno">Celular</label>
                                    <input type="email" class="form-control" id="txtCelularAlumnomat" name="txtCelularAlumno" placeholder="Celular del Alumno" REQUIRED>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div id="respuesta_matricula_alumno">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-body">
                                
                                <div class="form-group">
                                    <label for="txtGrado">Selecccione el grado y seccion donde pertenecera el Alumno</label>
                                    <select name="txtGrado" class="form-control">
                                        <?php
                                        foreach ($listagrado as $gra_secc_lista) {
                                            ?>  
                                            <option value="<?= $gra_secc_lista['id_grado'] ?>"><?= $gra_secc_lista['grado_grado'] . " " . $gra_secc_lista['nombre_seccion'] . " " . $gra_secc_lista['descripcion_nivel'] . " " . $gra_secc_lista['descripcion_turno'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="txtCostoMatricula">Costo de Matricula</label>
                                    <input type="text" class="form-control" id="txtCostoMatriculamat" name="txtCostoMatricula" placeholder="Costo de Matricula" REQUIRED>
                                </div>
                                <div class="form-group" style="text-align: center">
                                    <img src="images/logo.png" width="300px">
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

