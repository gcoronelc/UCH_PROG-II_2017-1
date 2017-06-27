$(document).ready(function () {


    $("#txtDniAlumno").keyup(function () {

        var dni = $(this).val().length;
        if (dni == 8) {
            $.ajax(
                    {
                        url: "../controller/AlumnoFindController.php?dni=" + $(this).val(),
                        type: "post",
                        data: $(this).val()
                    }
            ).done(function (respuesta) {
                if (respuesta == 1) {
                    $("#respuesta_dni_alumno").html('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Correcto!</strong> Datos del alumno cargados.</div>');
                    $("#cargar_busqueda_alumno").load("pages/modal/matricula/cargarAlumno.php");
                } else {
                    $("#respuesta_dni_alumno").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Atencion!</strong> Este es un alumno Nuevo!.</div>');
                    $("#cargar_busqueda_alumno").load("pages/modal/matricula/cargarAlumno.php");
                }

            });
        }


    });

});