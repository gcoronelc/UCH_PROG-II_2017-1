<?php
session_start();
require_once '../dao/UsuarioDAO.php';
class UsuarioInfoController {
   public $usu;
   function __construct() {
       $this->usu = new UsuarioDAO();
   }
   public function infoUsuario($usuario) {
        return $this->usu->findInfoUsuario($usuario);
    }
   
}//fin de clase

$usu_nom=$_POST['txtBuscar'];
$usuario= new UsuarioInfoController();
$infousu=$usuario->infoUsuario($usu_nom);

$_SESSION['info_usuario']=$infousu;

?>