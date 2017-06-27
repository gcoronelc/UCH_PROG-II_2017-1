$(document).ready(function () {

    $('#dataEliminarGRA').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget); // Botón que activó el modal
        var codigo_grado = button.data('codigo_grado'); // Extraer la información de atributos de datos
        var modal = $(this);
        modal.find('#txtCodigoGrado').val(codigo_grado);
    });

    $('#formulario_eliminar_gra').submit(function (e) {
        e.preventDefault();
        var parametros = $(this).serializeArray();
        $.ajax({
            type: "POST",
            url: "../controller/GradoDeleteController.php",
            data: parametros
        }).done(function (respuesta) {
            if (respuesta == 1) {
                location.reload();
            } else {
                alert(respuesta);
            }
        });
    });

    $('#dataUpdateGRA').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget); // Botón que activó el modal
        var codigo_grado = button.data('codigo_grado'); // Extraer la información de atributos de datos
        var grado_grado = button.data('grado_grado'); // Extraer la información de atributos de datos
        var col_nivel_id_nivel = button.data('col_nivel_id_nivel'); // Extraer la información de atributos de datos
        var col_Seccion_id_seccion = button.data('col_Seccion_id_seccion'); // Extraer la información de atributos de datos
        var col_Turno_id_turno = button.data('col_Turno_id_turno'); // Extraer la información de atributos de datos
        var max_alumno = button.data('max_alumno'); // Extraer la información de atributos de datos
        var cant_alumno = button.data('cant_alumno'); // Extraer la información de atributos de datos
        var finicio_grado = button.data('finicio_grado'); // Extraer la información de atributos de datos
        var ffin_grado = button.data('ffin_grado'); // Extraer la información de atributos de datos
        var estado_grado = button.data('estado_grado'); // Extraer la información de atributos de datos


        var modal = $(this);
        modal.find('.modal-title').text('Modificar Grado: ' + grado_grado);
        modal.find("#txtCodigoGradogra").val(codigo_grado);
        modal.find("#txtGradogra").val(grado_grado);
        modal.find("#txtNivelgra option[value='" + col_nivel_id_nivel + "']").attr("selected", "selected");
        modal.find("#txtSecciongra option[value='" + col_Seccion_id_seccion + "']").attr("selected", "selected");
        modal.find("#txtTurnogra option[value='" + col_Turno_id_turno + "']").attr("selected", "selected");
        modal.find('#txtMaxAlumgra').val(max_alumno);
        modal.find('#txtCantAlumgra').val(cant_alumno);
        modal.find('#txtFechaIniciogra').val(finicio_grado);
        modal.find('#txtFechaFingra').val(ffin_grado);

        modal.find("#txtEstadogra option[value='" + estado_grado + "']").attr("selected", "selected");



    });

    $('#formulario_modificar_grado').submit(function (e) {
        e.preventDefault();
        var parametros = $(this).serialize();
        $.ajax({
            type: "post",
            url: "../controller/GradoUpdateController.php",
            data: parametros,
            success: function () {
            }
        }).done(function (respuesta) {
            if (respuesta == 1) {
                $("#respuesta_modificar_gra").html('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Correcto!</strong> El grado fue modificado, espere unos segundos porfavor.</div>');
                location.reload();
            } else if (respuesta == 4592) {
                $("#respuesta_modificar_gra").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El grado con este CODIGO ya esxiste.</div>');
            } else if (respuesta == 4591) {
                $("#respuesta_modificar_gra").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El grado con este NOMBRE ya existe.</div>');
            } else {
                $("#respuesta_modificar_gra").html(respuesta);
            }
        });
    });



});