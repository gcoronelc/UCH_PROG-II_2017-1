<?php

require_once '../dao/UsuarioDAO.php';

class UsuarioListaController {

    public $usu;

    function __construct() {
        $this->usu = new UsuarioDAO();
    }

    public function lista() {
        return $this->usu->readAllUsuario();
    }

}

?>
