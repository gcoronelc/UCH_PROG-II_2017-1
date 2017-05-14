<?php

session_start();
require_once '../util/Session.php';
$error=Session::getAttribute2("error");
$usuario=Session::getAttribute2("usuario");

?>

<!DOCTYPE html "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <meta http-equiv="content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet"type="text/css" href="../css/estilos.css">
        <title></title>
    </head>
    <body>
        <h1>PolBank</h1>
        <h2>Ingreso al Sistema</h2>
        <form method="post" action="controller/LogonController.php">
            <table width="273" cellspacing="0">
                <tr>
                    <td width="53">Usuario</td>
                    <td width="110">
                        <input name="usario" type="text" class="CampoEdition"
                               id="usuario" size="15" maxlength="15"
                               value="<?php echo $usuario;?>">
                    </td>
                    <td width="102"></td>
                </tr>
                <tr>
                    <td>Clave</td>
                    <td>
                        <input name="Clave" type="password" class="CampoEdition";
                               id="clave" size="15" maxlength="15">
                    </td>
                    <td>
                        <input name="btnIngresar" type="submit" class="Boton" id="btnIngresar" value="Ingresar">
                    </td>
                </tr>
            </table>
        </form>
        <p class="mensajeError"><?php echo($error);?></p>
    </body>
</html>
