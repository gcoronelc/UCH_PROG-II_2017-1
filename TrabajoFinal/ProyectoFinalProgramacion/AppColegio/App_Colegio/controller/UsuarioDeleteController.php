<?php

require_once '../dao/UsuarioDAO.php';
date_default_timezone_set("America/Lima");

class UsuarioDeleteController {

    public $usu;

    function __construct() {
        $this->usu = new UsuarioDAO();
    }

    public function eliminar($usu_usuario) {
        return $this->usu->deleteUsuario($usu_usuario);
    }

}

$usu=$_GET['usu'];

$usuario=new UsuarioDeleteController();
$respuesta=$usuario->eliminar($usu);

//echo 'respuesta '. $respuesta;
header("location: ../view/menu.php?p=menu_usuario");
?>

