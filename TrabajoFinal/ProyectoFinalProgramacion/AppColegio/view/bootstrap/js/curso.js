$(document).ready(function () {

    $('#dataEliminarCUR').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget); // Botón que activó el modal
        var codigo_curso = button.data('codigo_curso'); // Extraer la información de atributos de datos
        var modal = $(this);
        modal.find('#txtCodigoCurso').val(codigo_curso);
    });

    $("#dataRegisterCUR").on('show.bs.modal', function (e) {
        var parametros = { prev_fn: 'codigo' };
        var modal = $(this);

        $.ajax({
            type: "POST",
            url: "../controller/CursoCreateController.php",
            data: parametros,
            success: function () {
            }
        }).done(function (respuesta) {
            if(respuesta != '')
                modal.find('#txtCodigoCurso').val(respuesta);
        });
    });

    $('#formulario_eliminar_cur').submit(function (e) {
        e.preventDefault();
        var parametros = $(this).serializeArray();
        $.ajax({
            type: "POST",
            url: "../controller/CursoDeleteController.php",
            data: parametros
        }).done(function (respuesta) {
            if (respuesta == 1) {
                location.reload();
            } else {
                alert(respuesta);
            }
        });
    });

    $("#formulario_nuevo_curso").submit(function (e) {
        e.preventDefault();
        var parametros = $(this).serializeArray();
        $.ajax({
            type: "POST",
            url: "../controller/CursoCreateController.php",
            data: parametros
        }).done(function (respuesta) {
            if (respuesta == 1) {
                $("#respuesta_crear_curso").html('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Correcto!</strong> El curso fue creado, espere unos segundos porfavor.</div>');
                location.reload();
            } else if (respuesta == 4592) {
                $("#respuesta_crear_cur_codigo").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El Curso con este CODIGO ya esxiste.</div>');
            } else if (respuesta == 4591) {
                $("#respuesta_crear_cur_nombre").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El Curso con este NOMBRE ya existe.</div>');
            } else {
                $("#respuesta_crear_curso").html(respuesta);
            }
        });
    });


    $('#dataUpdateCUR').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget); // Botón que activó el modal
        var codigo_curso = button.data('codigo_curso'); // Extraer la información de atributos de datos
        var id_docente = button.data('id_docente'); // Extraer la información de atributos de datos
        var nombre_curso = button.data('nombre_curso'); // Extraer la información de atributos de datos
        var descripcion_curso = button.data('descripcion_curso'); // Extraer la información de atributos de datos
        var fregistro_curso = button.data('fregistro_curso'); // Extraer la información de atributos de datos
        var estado_curso = button.data('estado_curso'); // Extraer la información de atributos de datos

        var modal = $(this);
        modal.find("#txtFregistrocur").val(fregistro_curso);
        modal.find("#txtCodigoCurso").val(codigo_curso);
        modal.find('.modal-title').text('Modificar Curso: ' + nombre_curso);
        modal.find('#txtNombrecur').val(nombre_curso);
        modal.find('#txtDescripcioncur').val(descripcion_curso);
        modal.find("#txtDocentecur option[value='" + id_docente + "']").attr("selected", "selected");
        modal.find("#txtEstadocur option[value='" + estado_curso + "']").attr("selected", "selected");
    });

    $('#formulario_modificar_curso').submit(function (e) {
        e.preventDefault();
        var parametros = $(this).serialize();
        $.ajax({
            type: "post",
            url: "../controller/CursoUpdateController.php",
            data: parametros,
            success: function () {
            }
        }).done(function (respuesta) {
            if (respuesta == 1) {
                $("#respuesta_modificar_curso").html('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Correcto!</strong> El curso fue modificado, espere unos segundos porfavor.</div>');
                location.reload();
            } else if (respuesta == 4592) {
                $("#respuesta_modificar_cur_codigo").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El Curso con este CODIGO ya esxiste.</div>');
            } else if (respuesta == 4591) {
                $("#respuesta_modificar_cur_nombre").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El Curso con este NOMBRE ya existe.</div>');
            } else {
                $("#respuesta_modificar_curso").html(respuesta);
            }
        });
    });


});

