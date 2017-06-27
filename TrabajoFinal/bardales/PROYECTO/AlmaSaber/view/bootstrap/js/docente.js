$(document).ready(function () {


    $("#dataDeleteDC").on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget); // Botón que activó el modal
        var codigo = button.data('codigo_docente'); // Extraer la información de atributos de datos
        var modal = $(this);
        modal.find('#txtCodigoDocente').val(codigo);
    });

// aqui segun la respuesta vamos a aeliminar el registro
    $("#eliminarDC").submit(function (e) {

        var parametros = $(this).serializeArray();
        $.ajax({
            type: "POST",
            url: "../controller/DocenteDeleteController.php",
            data: parametros,
            success: function () {
            }
        }).done(function (respuesta) {
            if (respuesta == 1) {
                location.reload();
            } else {
                alert(respuesta);
            }
        });
        e.preventDefault();
    });

    $("#formulario_nuevo_docente").submit(function (e) {
        e.preventDefault();
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "../controller/DocenteCreateController.php",
            data: parametros,
            success: function () {
            }
        }).done(function (respuesta) {
            if (respuesta == 1) {
                $("#respuesta_crear_doc_si").html('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Correcto!</strong> Docente registrado con exito, espere unos segundos porfavor.</div>');
                location.reload();
            } else if (respuesta == 4592) {
                $("#respuesta_crear_doc_codigo").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El docente con este CODIGO ya esxiste.</div>');
            } else if (respuesta == 4591) {
                $("#respuesta_crear_doc_dni").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El docente con este DNI ya existe.</div>');
            }
        });

    });

    $('#dataUpdateDC').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget); // Botón que activó el modal
        var codigo_docente = button.data('codigo_docente'); // Extraer la información de atributos de datos
        var dni_docente = button.data('dni_docente'); // Extraer la información de atributos de datos
        var nombre_docente = button.data('nombre_docente'); // Extraer la información de atributos de datos
        var ap_docente = button.data('ap_docente'); // Extraer la información de atributos de datos
        var am_docente = button.data('am_docente'); // Extraer la información de atributos de datos
        var sexo_docente = button.data('sexo_docente'); // Extraer la información de atributos de datos
        var email_docente = button.data('email_docente'); // Extraer la información de atributos de datos
        var telefono_docente = button.data('telefono_docente'); // Extraer la información de atributos de datos
        var celular_docente = button.data('celular_docente'); // Extraer la información de atributos de datos
        var fregistro_docente = button.data('fregistro_docente'); // Extraer la información de atributos de datos
        var estado_docente = button.data('estado_docente'); // Extraer la información de atributos de datos


        var modal = $(this);
        modal.find("#txtFregistrodc").val(fregistro_docente);
        modal.find("#txtCodigoDocentedc").val(codigo_docente);
        modal.find('.modal-title').text('Modificar docente: ' + nombre_docente);
        modal.find('#txtDnidc').val(dni_docente);
        modal.find('#txtNombredc').val(nombre_docente);
        modal.find('#txtApaternodc').val(ap_docente);
        modal.find('#txtAmaternodc').val(am_docente);
        if (sexo_docente == "M") {
            modal.find('#chekSexoMdc').prop("checked", "checked");
        } else {
            modal.find('#chekSexoFdc').prop("checked", "checked");
        }
        modal.find('#txtEmaildc').val(email_docente);
        modal.find('#txtTelefonodc').val(telefono_docente);
        modal.find('#txtCelulardc').val(celular_docente);
        modal.find("#txtEstadodc option[value='" + estado_docente + "']").attr("selected", "selected");

    });

      $("#formulario_modificar_docente").submit(function (e) {
        e.preventDefault();
        var parametros = $(this).serializeArray();
        $.ajax({
            type: "post",
            url: "../controller/DocenteUpdateController.php",
            data: parametros,
            success: function () {
            }
        }).done(function (respuesta) {
            if (respuesta == 1) {
                $("#respuesta_modificar_dc").html('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Correcto!</strong> Se a modificado satisfactoriamente.</div>');
                location.reload();
            }  else if (respuesta == 4592) {
                $("#respuesta_modificar_dc").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El docente con este CODIGO ya esxiste.</div>');
            } else if (respuesta == 4591) {
                $("#respuesta_modificar_dc").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> El docente con este DNI ya existe.</div>');
            }else{
                $("#respuesta_modificar_dc").html(respuesta);
            }
        });
    });


});

