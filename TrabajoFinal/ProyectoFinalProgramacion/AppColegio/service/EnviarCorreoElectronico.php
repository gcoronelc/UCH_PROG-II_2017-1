<?php

class EnviarCorreoElectronico {

    function __construct() {
        
    }

    public function enviarEmail($email, $asunto, $mensaje) {
        $rpt = 2;
        if (!empty($email) AND ! empty($asunto)) {

            $para = $email;
            $titulo = $asunto;
            // Para enviar un correo HTML, debe establecerse la cabecera Content-type
            $cabeceras = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // Cabeceras adicionales
            $cabeceras .= 'To: <' . $email . '>, Kelly <kelly@example.com>' . "\r\n";
            $cabeceras .= 'From: Alma del Saber <contacto@gmail.com>' . "\r\n";
            $cabeceras .= 'Cc: ' . $email . ' ' . "\r\n";
            $cabeceras .= 'Bcc: ' . $email . ' ' . "\r\n";
            $contenido = $mensaje; // podemos incluir codigo HTML
            if (mail($para, $titulo, $contenido, $cabeceras)) {
                $rpt = 1;
            }
        }
        return $rpt;
    }

}

$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
$asunto = isset($_POST['txtAsunto']) ? $_POST['txtAsunto'] : "";
$mensaje = isset($_POST['txtMensaje']) ? $_POST['txtMensaje'] : "";

$enviar= new EnviarCorreoElectronico();
$respuesta= $enviar->enviarEmail($email, $asunto, $mensaje);

echo $respuesta;

?>