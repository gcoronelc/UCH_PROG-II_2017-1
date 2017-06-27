<?php

require_once '../dao/DocenteDAO.php';

class DocenteListaController {

    public $doc;

    function __construct() {
        $this->doc = new DocenteDAO();
    }

    public function lista() {
        return $this->doc->readAllDocente();
    }

}
