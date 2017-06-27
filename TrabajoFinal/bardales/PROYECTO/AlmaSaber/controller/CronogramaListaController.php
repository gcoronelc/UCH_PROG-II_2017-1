<?php

require_once '../dao/CronogramaDAO.php';

class CronogramaListaController {

    public $cronograma;

    function __construct() {
        $this->cronograma = new CronogramaDAO();
    }

    public function lista() {
        return $this->cronograma->readAllCronograma();
    }

}

?>
