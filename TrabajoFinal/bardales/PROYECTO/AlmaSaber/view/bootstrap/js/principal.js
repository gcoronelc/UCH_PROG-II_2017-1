$(document).ready(function () {


    $('#formulario_breve_correo').submit(function (e) {
        e.preventDefault();
//        var parametros = $(this).serializeArray();
//        $.ajax({
//            type: "POST",
//            url: "../service/EnviarCorreoElectronico.php",
//            data: parametros
//        }).done(function (respuesta) {
//            if (respuesta == 1) {
//                $("#dataEnviarEmail").modal("show");
//            } else {
//                $("#dataEnviarEmail").modal("show");
//            }
//        });
        $("#dataEnviarEmail").modal("show");


    });


});


