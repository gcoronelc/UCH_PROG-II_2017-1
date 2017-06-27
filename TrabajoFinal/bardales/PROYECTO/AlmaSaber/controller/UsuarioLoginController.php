<?php

require_once '../dao/UsuarioDAO.php';

class UsuarioLoginController {

    public $usu;

    function __construct() {
        $this->usu = new UsuarioDAO();
    }

    public function login($usuario, $password) {
        return $this->usu->findUsuario($usuario, $password);
    }

}

$usuario = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];

$usu = new UsuarioLoginController();
$respuesta = $usu->login($usuario, $password);

echo $respuesta;
?>
