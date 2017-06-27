<?php

require_once '../dao/GradoDAO.php';

class GradoListaController {
    public $grado;
    function __construct() {
        $this->grado= new GradoDAO();
    }
    public function lista(){
        return $this->grado->readAllGrado();
    }

}
