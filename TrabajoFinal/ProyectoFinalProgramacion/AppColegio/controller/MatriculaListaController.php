<?php

require_once '../dao/MatriculaDAO.php';

class MatriculaListaController {

    public $matricula;

    function __construct() {
        $this->matricula = new MatriculaDAO();
    }
    
    public function lista(){
    return $this->matricula->readAllMatricula();
    }

}

?>