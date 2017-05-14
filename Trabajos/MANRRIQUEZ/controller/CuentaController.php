<?php

session_start();
require_once '../model/CuentaModel.php';
require_once '../util/Session.php';

/* 
 * En la mayoria de casos un controlador atiende varios requerimientos desde
 * diferentes formularios
 * 
 * Este controlador atenderá 2 tipos de rquerimientos:
 * -El primero será sobre los datos de una cuenta
 * -El segundo será sobre los movimientos de una cuenta
 * 
 * El formulario debe enviar un parámetro de nombre action con el nombre del
 * método a ejecutar
 * 
 * El conrolador no debe acceder directamente a la capa DAO, sino que debe
 * hacerlo a través de la capa MODEL
 */

$action = $_REQUEST["action"];
$controller = new CuentaController();
$target = call_user_func(array($controller, $action));
header("location: $target");
return;

class CuentaController{
    
    public function consultarCuenta(){
        try {
            $cuenta = $_REQUEST["cuenta"];
            $model = new CuentaModel();
            $reCuenta = $model->consultarCuenta($cuenta);
            Session::setAttribute("cuenta", $reCuenta);
        } catch (Exception $e) {
            Session::setAttribute("error", $e->getMessage());
        }
        return"../view/estado.php"; 
   }
   
   public function consultarMovimientos(){
       try {
           $cuenta = $_REQUEST["cuenta"];
            $model = new CuentaModel();
            $reCuenta = $model->consultarMovimientos($cuenta);
            Session::setAttribute("movimientos", $movi);
       } catch (Exception $e) {
           Session::setAttribute("error", $e->getMessage());
       }
       return"../view/movimientos.php"; 
   }
   
}

?>