<?php

session_start();
require_once '../util/Session.php';

//Controla el inicio de sesiòn
if(Session::NoExistsAttribute("empleado")){
    header("location: logon.php");
}
$emp = Session::getAttribute("empelado");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <script type="text/javascript" src="../js/main.js"></script>
        <title></title>
    </head>
    
    <body onload="initPage()">
        <h1>polBank</h1>
        <p>Usuario: <?php echo $emp["vch_emplusuario"];?></p>
        <table width="500 px" border="2" cellspacing="0">
            <tr class="Menu01">
                <td width="165">
                    <a href="javascript: cargarPagina('estado.php')">Estado Cuenta</a>
                </td>
                <td width="165">
                    <a href="javascript: cargarPagina('movimientos.php')">Movimientos</a>
                </td>
                <td width="165">
                    <a href="salir.php">Salir</a>
                </td>
            </tr>
        </table>
        <p>
            <iframe width="500 px" height="300 px" id="work"></iframe>
        </p>
    </body>
</html>