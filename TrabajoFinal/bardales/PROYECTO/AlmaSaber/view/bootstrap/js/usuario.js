$(document).ready(function () {


//    crear nuevo tipo de usuario 

    $("#addtipoUsuario").submit(function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: "../controller/UsuarioTipoCreateCotroller.php",
            type: "post",
            data: datos
        }).done(function (respuesta) {
            if (respuesta == 1) {
                location.reload();
            } else {
                $("#error_mensaje_tu").html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Este tipo de usuario ya existe, prueba con otro.</div>');
            }
        });
    });

    $('#eliminarTU').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget); // Botón que activó el modal
        var descripcion = button.data('descripcion'); // Extraer la información de atributos de datos
        var modal = $(this);
        modal.find('#txtDescripcionTU').val(descripcion);
    });

    $("#eliminarUsuarioTU").submit(function (e) {
        var parametros = $(this).serializeArray();
        $.ajax({
            type: "POST",
            url: "../controller/UsuarioTipoDeleteController.php",
            data: parametros
        }).done(function (respuesta) {
            if (respuesta == 1) {
                location.reload();
            } else {
                alert(respuesta);
            }
        });
        e.preventDefault();
    });


    $('#dataUpdate').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget); // Botón que activó el modal
        var tipoUsuario = button.data('tipousuario'); // Extraer la información de atributos de datos
        var nombre_usuario = button.data('nombre_usuario'); // Extraer la información de atributos de datos
        var ap_usuario = button.data('ap_usuario'); // Extraer la información de atributos de datos
        var am_usuario = button.data('am_usuario'); // Extraer la información de atributos de datos
        var sexo = button.data('sexo'); // Extraer la información de atributos de datos
        var email = button.data('email'); // Extraer la información de atributos de datos
        var usuario = button.data('usuario'); // Extraer la información de atributos de datos
        var password = button.data('password'); // Extraer la información de atributos de datos
        var fregistro = button.data('fregistro'); // Extraer la información de atributos de datos
        var estado = button.data('estado'); // Extraer la información de atributos de datos

        var modal = $(this);
        modal.find("#txtfregistro").val(fregistro);
        modal.find('.modal-title').text('Modificar usuario: ' + usuario);
        modal.find("#txtTipoUsuario option[value='" + tipoUsuario + "']").attr("selected", "selected");
        modal.find('#txtNombre').val(nombre_usuario);
        modal.find('#txtAPaterno').val(ap_usuario);
        modal.find('#txtAMaterno').val(am_usuario);
        if (sexo == "M") {
            modal.find('#chekSexoM').prop("checked", "checked");
        } else {
            modal.find('#chekSexoF').prop("checked", "checked");
        }
        modal.find('#txtEmail').val(email);
        modal.find('#txtUsuario').val(usuario);
        modal.find('#txtPassword').val(password);
        modal.find('#txtPassword2').val(password);
        modal.find("#txtEstado option[value='" + estado + "']").attr("selected", "selected");

    });


    $("#actualizarUsuario").submit(function (e) {
        e.preventDefault();
        var parametros = $(this).serializeArray();
        $.ajax({
            type: "post",
            url: "../controller/UsuarioUpdateController.php",
            data: parametros,
            success: function () {
            }
        }).done(function (respuesta) {
            if (respuesta == 1) {
                $("#respuesta_modificar_usu").html('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Correcto!</strong> Usuario modificado con exito, espere unos segundos porfavor.</div>');
                location.reload();
            } else if (respuesta == 2) {
                $('#respuesta_modificar_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Ups!, hemos tenido un problema estamos trabajando en ellos, puede volver a intentarlo ma starde.</div>');
            } else if (respuesta == 15) {
                $('#respuesta_modificar_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Las contraseñas no coinciden.</div>');
            } else if (respuesta == 16) {
                $('#respuesta_modificar_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> La contraseña debe tener por lo menos 8 caracteres.</div>');
            } else if (respuesta == 17) {
                $('#respuesta_modificar_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Ups!, el password debe tener al menos un caracter numérico.</div>');
            } else if (respuesta == 18) {
                $('#respuesta_modificar_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Ups!, el password debe tener al menos una letra.</div>');
            } else if (respuesta == 4592) {
                $('#respuesta_modificar_usu_ex').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Este nombre de usuario ya se encuentra registrado.</div>');
            }
        });
    });

// aqui activamos el modal antes de eleiminarlo
    $("#dataDelete").on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget); // Botón que activó el modal
        var id = button.data('usuario'); // Extraer la información de atributos de datos
        var modal = $(this);
        modal.find('#usu_usuario').val(id);
    });



// aqui segun la respuesta vamos a aeliminar el registro
    $("#eliminarUsuario").submit(function (e) {
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "../controller/UsuarioDeleteController.php",
            data: parametros,
            success: function () {
            }
        }).done(function (respuesta) {
            if (respuesta == 1) {
                $(".datos_ajax_delete").html("Eliminado con exito");
                location.reload();
            } else {
                $(".datos_ajax_delete").html(respuesta);
            }
        });
        e.preventDefault();
    });






    $("#formulario_login").submit(function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: "../controller/UsuarioLoginController.php",
            type: "post",
            data: datos
        }).done(function (respuesta) {
            if (respuesta == 1) {
                location.href = "menu.php";
            } else if (respuesta == 4592) {
                $("#respuesta").css({"display": "block"});
                $("#respuesta").html('<div  class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>Lo sentimos su cuenta esta desactivada, ponte en contacto con el Administrador!</p></div>');
            } else {
                $("#respuesta").css({"display": "block"});
                $("#respuesta").html('<div  class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>Verifique sus datos porfavor.</p></div>');
            }
        });
    });



    $('#formulario_nuevo_usuario').submit(function (e) {
        e.preventDefault();
        if ($("#txtNombre").val().length > 0 && $("#txtAPaterno").val().length > 0 &&
                $("#txtAMaterno").val().length > 0 && $("#txtEmail").val().length > 0 &&
                $("#txtUsuario").val().length > 0 && $("#txtPassword").val().length > 0 &&
                $("#txtPassword2").val().length > 0) {
            var datos = $(this).serializeArray();
            $.ajax({
                url: "../controller/UsuarioCreateController.php",
                type: "post",
                data: datos
            }).done(function (respuesta) {
                if (respuesta == 1) {
                    $("#respuesta_crear_usu").html('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Correcto!</strong> Usuario registrado con exito, espere unos segundos porfavor.</div>');
                    location.reload();
                } else if (respuesta == 2) {
                    $('#respuesta_crear_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Ups!, hemos tenido un problema estamos trabajando en ellos, puede volver a intentarlo ma starde.</div>');
                } else if (respuesta == 15) {
                    $('#respuesta_crear_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Las contraseñas no coinciden.</div>');
                } else if (respuesta == 16) {
                    $('#respuesta_crear_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> La contraseña debe tener por lo menos 8 caracteres.</div>');
                } else if (respuesta == 17) {
                    $('#respuesta_crear_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Ups!, el password debe tener al menos un caracter numérico.</div>');
                } else if (respuesta == 18) {
                    $('#respuesta_crear_usu').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Ups!, el password debe tener al menos una letra.</div>');
                } else if (respuesta == 4592) {
                    $('#respuesta_crear_usu_ex').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Advertencia!</strong> Este nombre de usuario ya se encuentra registrado.</div>');
                }
            });
        } else {
            $('#iconotexto').remove();
            $('#textoerror').remove();

            $('#iconotexto2').remove();
            $('#textoerror2').remove();

            $('#iconotexto3').remove();
            $('#textoerror3').remove();

            $('#iconotexto4').remove();
            $('#textoerror4').remove();

            $('#iconotexto5').remove();
            $('#textoerror5').remove();

            $('#iconotexto6').remove();
            $('#textoerror6').remove();

            $('#iconotexto7').remove();
            $('#textoerror7').remove();

            $("#txtNombre").parent().attr('class', 'form-group has-error has-feedback');
            $("#txtNombre").parent().append('<span id="iconotexto" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $("#txtNombre").parent().append('<span id="textoerror" class="help-block">Debes completar estec campo.</span>');

            $("#txtAPaterno").parent().attr('class', 'form-group has-error has-feedback');
            $("#txtAPaterno").parent().append('<span id="iconotexto2" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $("#txtAPaterno").parent().append('<span id="textoerror2" class="help-block">Debes completar estec campo.</span>');

            $("#txtAMaterno").parent().attr('class', 'form-group has-error has-feedback');
            $("#txtAMaterno").parent().append('<span id="iconotexto3" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $("#txtAMaterno").parent().append('<span id="textoerror3" class="help-block">Debes completar estec campo.</span>');

            $("#txtEmail").parent().attr('class', 'form-group has-error has-feedback');
            $("#txtEmail").parent().append('<span id="iconotexto4" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $("#txtEmail").parent().append('<span id="textoerror4" class="help-block">Debes completar estec campo.</span>');

            $("#txtUsuario").parent().attr('class', 'form-group has-error has-feedback');
            $("#txtUsuario").parent().append('<span id="iconotexto5" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $("#txtUsuario").parent().append('<span id="textoerror5" class="help-block">Debes completar estec campo.</span>');

            $("#txtPassword").parent().attr('class', 'form-group has-error has-feedback');
            $("#txtPassword").parent().append('<span id="iconotexto6" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $("#txtPassword").parent().append('<span id="textoerror6" class="help-block">Debes completar estec campo.</span>');

            $("#txtPassword2").parent().attr('class', 'form-group has-error has-feedback');
            $("#txtPassword2").parent().append('<span id="iconotexto7" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $("#txtPassword2").parent().append('<span id="textoerror7" class="help-block">Debes completar estec campo.</span>');

        }

    });






    //    Formulario crear usuario validando campos

//    $("#txtTipoUsuario").keyup(function () {
//        var caracter = $(this).val().length;
//        if (caracter > 0) {
//            $('#iconotexto').remove();
//            $('#textoerror').remove();
//            $(this).parent().attr('class', 'form-group has-success has-feedback');
//            $(this).parent().append('<span id="iconotexto" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
//        } else {
//            $('#iconotexto').remove();
//            $('#textoerror').remove();
//            $(this).parent().attr('class', 'form-group has-error has-feedback');
//            $(this).parent().append('<span id="iconotexto" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
//            $(this).parent().append('<span id="textoerror" class="help-block">Debes completar estec campo.</span>');
//        }
//    });

    $("#txtNombre").keyup(function () {
        var caracter = $(this).val().length;
        if (caracter > 0) {
            $('#iconotexto').remove();
            $('#textoerror').remove();
            $(this).parent().attr('class', 'form-group has-success has-feedback');
            $(this).parent().append('<span id="iconotexto" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
        } else {
            $('#iconotexto').remove();
            $('#textoerror').remove();
            $(this).parent().attr('class', 'form-group has-error has-feedback');
            $(this).parent().append('<span id="iconotexto" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $(this).parent().append('<span id="textoerror" class="help-block">Debes completar estec campo.</span>');
        }
    });

    $("#txtAPaterno").keyup(function () {
        var caracter = $(this).val().length;
        if (caracter > 0) {
            $('#iconotexto2').remove();
            $('#textoerror2').remove();
            $(this).parent().attr('class', 'form-group has-success has-feedback');
            $(this).parent().append('<span id="iconotexto2" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
        } else {
            $('#iconotexto2').remove();
            $('#textoerror2').remove();
            $(this).parent().attr('class', 'form-group has-error has-feedback');
            $(this).parent().append('<span id="iconotexto2" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $(this).parent().append('<span id="textoerror2" class="help-block">Debes completar estec campo.</span>');
        }
    });

    $("#txtAMaterno").keyup(function () {
        var caracter = $(this).val().length;
        if (caracter > 0) {
            $('#iconotexto3').remove();
            $('#textoerror3').remove();
            $(this).parent().attr('class', 'form-group has-success has-feedback');
            $(this).parent().append('<span id="iconotexto3" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
        } else {
            $('#iconotexto3').remove();
            $('#textoerror3').remove();
            $(this).parent().attr('class', 'form-group has-error has-feedback');
            $(this).parent().append('<span id="iconotexto3" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $(this).parent().append('<span id="textoerror3" class="help-block">Debes completar estec campo.</span>');
        }
    });

    $("#txtEmail").keyup(function () {
        var caracter = $(this).val().length;
        if (caracter > 0) {
            $('#iconotexto4').remove();
            $('#textoerror4').remove();
            $(this).parent().attr('class', 'form-group has-success has-feedback');
            $(this).parent().append('<span id="iconotexto4" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
        } else {
            $('#iconotexto4').remove();
            $('#textoerror4').remove();
            $(this).parent().attr('class', 'form-group has-error has-feedback');
            $(this).parent().append('<span id="iconotexto4" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $(this).parent().append('<span id="textoerror4" class="help-block">Debes completar estec campo.</span>');
        }
    });

    $("#txtUsuario").keyup(function () {
        var caracter = $(this).val().length;
        if (caracter > 0) {
            $('#iconotexto5').remove();
            $('#textoerror5').remove();
            $(this).parent().attr('class', 'form-group has-success has-feedback');
            $(this).parent().append('<span id="iconotexto5" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
        } else {
            $('#iconotexto5').remove();
            $('#textoerror5').remove();
            $(this).parent().attr('class', 'form-group has-error has-feedback');
            $(this).parent().append('<span id="iconotexto5" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $(this).parent().append('<span id="textoerror5" class="help-block">Debes completar estec campo.</span>');
        }
    });

    $("#txtPassword").keyup(function () {
        var caracter = $(this).val().length;
        if (caracter >= 8) {
            $('#iconotexto6').remove();
            $('#textoerror6').remove();
            $(this).parent().attr('class', 'form-group has-success has-feedback');
            $(this).parent().append('<span id="iconotexto6" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
        } else {
            $('#iconotexto6').remove();
            $('#textoerror6').remove();
            $(this).parent().attr('class', 'form-group has-error has-feedback');
            $(this).parent().append('<span id="iconotexto6" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $(this).parent().append('<span id="textoerror6" class="help-block">La contraseña debe tener por lo menos 8 caracteres.</span>');
        }
    });

    $("#txtPassword2").keyup(function () {
        var caracter = $(this).val().length;
        if (caracter >= 8) {
            $('#iconotexto7').remove();
            $('#textoerror7').remove();
            $(this).parent().attr('class', 'form-group has-success has-feedback');
            $(this).parent().append('<span id="iconotexto7" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
        } else {
            $('#iconotexto7').remove();
            $('#textoerror7').remove();
            $(this).parent().attr('class', 'form-group has-error has-feedback');
            $(this).parent().append('<span id="iconotexto7" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            $(this).parent().append('<span id="textoerror7" class="help-block">La contraseña debe tener por lo menos 8 caracteres.</span>');
        }
    });
    //    fin de validar campos de nuevo usuario

});