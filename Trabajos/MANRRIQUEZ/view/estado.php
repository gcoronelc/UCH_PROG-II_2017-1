<?php

session_start();
require_once '../util/Session.php';

$cuenta = Session::getAttribute2("cuenta");
$error = Session::getAttribute2("error");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <meta http-equiv="Content-Type" content="txt/html; charset=UTF-8">
        <link rel="stylesheet" type="txt/css" href="../css/estilos.css">
        <title></title>
    </head>
    <body>
        <h2>Estado de una Cuenta</h2>
        <form name="form1" method="post" action="../controller/CuentaController.php">
            <input type="hidden" name="action" id="action" value="consultarCuenta"/>
            <label for="cuenta">Nro. Cuenta</label>
            <input name="cuenta" type="text" class="CampoEdicion" id="cuenta" size="8" maxlength="8">
            <input name="btnConsultar" type="submit" class="Boton" id="btnConsultar" value="Consultar">
        </form>
        <?php if($cuenta){?>
        <div>
            <h3>Resultado</h3>
            <table width="185" border="1" cellspacing="0">
                <tr>
                    <td width="63">Cuenta</td>
                    <td width="116"><?php echo $cuenta["chr_cuencodigo"];?></td>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td><?php echo $cuenta["vch_cuenestado"];?></td>
                </tr>
                <tr>
                    <td>Saldo</td>
                    <td><?php echo $cuenta["dec_cuensaldo"];?></td>
                </tr>
            </table>
        </div>
        <?php }?>
        <p class="MensajeError"><?php echo $error;?></p>
    </body>
</html>