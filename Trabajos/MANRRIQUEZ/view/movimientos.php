<?php

session_start();
require_once '../util/Session.php';

$lista = Session::getAttribute2("movimientos");
$error = Session::getAttribute2("error");

?>
<!DOCTYPE html "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <title></title>
    </head>
    <body>
        <h2>Movimientos de una Cuenta</h2>
        <form name="form1" method="post" action="../controller/CuentaController.php">
            <input type="hidden" name="action" id="action" value="consultarMovimientos"/>
            <label for="cuenta">Nro. Cuenta</label>
            <input name="cuenta" type="text" class="CampoEdicion" id="cuenta" size="8" maxlength="8">
            <input name="btnConsultar" type="submit" class="Boton" id="btnConsultar" value="Consultar">
        </form>
        <?php if ($lista) { ?>
        <div>
            <h3>Resultado</h3>
            <table width="333" border="1" cellspacing="0">
                <tr class="TablaTitulo">
                    <td width="68">Nro. Mov.</td>
                    <td width="95">Fecha</td>
                    <td width="66">Tipo</td>
                    <td width="86">Importe</td>
                </tr>
                <?php foreach ($lista as $rec) { ?>
                <tr class="TablaDato">
                    <td><?php echo $rec["int_movinumero"]; ?></td>
                    <td><?php echo $rec["dtt_movifecha"]; ?></td>
                    <td><?php echo $rec["chr_tipocodigo"]; ?></td>
                    <td><?php echo $rec["dec_moviimporte"]; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <?php } ?>
    </body>
</html>
