$(document).ready(function () {

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
            } else {
                $("#respuesta").css({"display": "block"});
            }
        });
    });

    $("#formulario_buscar_usuario").submit(function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: "../controller/UsuarioInfoController.php",
            type: "post",
            data: datos,
            success: function (data) {
                $("#respuesta_busqueda_usuario").html('<center><img src="images/load.gif" width="100px"></center>');
            }

        }).done(function (respuesta) {
            $("#respuesta_busqueda_usuario").load("pages/update_usuario.php");
        });
    });
    
    $("#btnNuevoUsuario").click(function () {
        location.reload();
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
                    $('#myModal').modal('show');

                    $("#txtNombre").val("");
                    $("#txtNombre").parent().attr('class', 'form-group');
                    $("#txtAPaterno").val("");
                    $("#txtAPaterno").parent().attr('class', 'form-group');
                    $("#txtAMaterno").val("");
                    $("#txtAMaterno").parent().attr('class', 'form-group');
                    $("#txtEmail").val("");
                    $("#txtEmail").parent().attr('class', 'form-group');
                    $("#txtUsuario").val("");
                    $("#txtUsuario").parent().attr('class', 'form-group');
                    $("#txtPassword").val("");
                    $("#txtPassword").parent().attr('class', 'form-group');
                    $("#txtPassword2").val("");
                    $("#txtPassword2").parent().attr('class', 'form-group');

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



                } else if (respuesta == 2) {
                    $('#myModal5').modal('show');
                } else if (respuesta == 15) {
                    $('#myModal2').modal('show');
                } else if (respuesta == 16) {
                    $('#myModal3').modal('show');
                } else if (respuesta == 17) {
                    $('#myModal6').modal('show');
                } else if (respuesta == 18) {
                    $('#myModal7').modal('show');
                } else if (respuesta == 4592) {
                    $('#myModal4').modal('show');
                } else {
                    alert(respuesta);
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