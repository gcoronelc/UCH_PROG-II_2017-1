<?php

session_start();
require_once('../service/LogLoginService.php');
date_default_timezone_set("America/Lima");

$usuario=$_SESSION['usu_usuario'];
$inicio_session=$_SESSION['inicio_session'];
$fin_session=date("Y-m-d H:i:s.u");
// el srtotime convierte una descripcion de fecha en una hora textual
$tiempo_session=abs((strtotime($fin_session) - strtotime($inicio_session))/60);

$minutos=number_format($tiempo_session,2,'.',',');

$log=new LogLoginService();
$log->crear_log_Login($usuario,$inicio_session,$fin_session,$minutos);

session_destroy();

header("location: ../index.php");

?>
