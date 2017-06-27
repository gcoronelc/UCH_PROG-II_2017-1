<?php

require_once '../dao/CursoDAO.php';

class CursoListaController {

    public $cur;

    function __construct() {
        $this->cur = new CursoDAO();
    }

    public function lista() {
        return $this->cur->readAllCurso();
    }

}
