<?php

//Este controlador solo atiende un requerimiento
//El requerimiento que atiende es el inicio de sesion

session_start();
require_once '../model/LogonModel.php';
require_once '../util/Session.php';

try {
    
    //Datos
    $usuario = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];
    
    //Proceso
    $model = new LogonModel();
    $recEmpl = $model->validar($usuario, $clave);
    Session::setAttriubute("empleado", $recEmpl);
    $target = "../view/main.php";
} catch (Exception $e) {
    Session::setAttribute("error", $e->getMessage());
    Session::setAttribute("usuario", $usuario);
    $target = "../view/logon.php";
}
header("location: $target");

?>