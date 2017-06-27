<?php

require_once '../dao/UsuarioTipoDAO.php';

class UsuarioTipoListaController {

    public $usu;

    function __construct() {
        $this->usu = new UsuarioTipoDAO();
    }

    public function lista() {
        return $this->usu->listTUsuario();
    }

}
