<?php
session_start();

$alumno = $_SESSION['alumno_b'];

if (isset($alumno)) {

    foreach ($alumno as $array) {
        $nombre_alumno = $array["nombre_alumno"];
        $ap_alumno = $array["ap_alumno"];
        $am_alumno = $array["am_alumno"];
        $email_alumno = $array["email_alumno"];
        $telefono_alumno = $array["telefono_alumno"];
        $celular_alumno = $array["celular_alumno"];
    }
    ?>
    <div class="form-group">
        <label for="txtNombreAlumno">Nombre del Alumno</label>
        <input type="text" class="form-control" id="txtNombreAlumnomat" name="txtNombreAlumno" value="<?= $nombre_alumno ?>" REQUIRED>
    </div>
    <div class="form-group">
        <label for="txtApellidoPaterno">Apellido Paterno</label>
        <input type="text" class="form-control" id="txtApellidoPaternomat" name="txtApellidoPaterno" value="<?= $ap_alumno ?>" REQUIRED>
    </div>
    <div class="form-group">
        <label for="txtApellidoMaterno">Apellido Materno</label>
        <input type="text" class="form-control" id="txtApellidoMaternomat" name="txtApellidoMaterno" value="<?= $am_alumno ?>" REQUIRED>
    </div>

    <div class="form-group">
        <label for="txtEmailAlumno">Email</label>
        <input type="email" class="form-control" id="txtEmailAlumnomat" name="txtEmailAlumno" value="<?= $email_alumno ?>" REQUIRED>
    </div>

    <div class="form-group">
        <label for="txtTelefonoAlumno">Telefono</label>
        <input type="email" class="form-control" id="txtTelefonoAlumnomat" name="txtTelefonoAlumno" value="<?= $telefono_alumno ?>" REQUIRED>
    </div>

    <div class="form-group">
        <label for="txtCelularAlumno">Celular</label>
        <input type="email" class="form-control" id="txtCelularAlumnomat" name="txtCelularAlumno" value="<?= $celular_alumno ?>" REQUIRED>
    </div>

    <?php
} else {
    ?>

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


<?php } ?>
