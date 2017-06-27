<?php

require_once '../dao/DocenteDAO.php';
date_default_timezone_set("America/Lima");

class DocenteDeleteController {
     public $doc;

    function __construct() {
        $this->doc = new DocenteDAO();
    }

    public function eliminar($codigo_docente) {
        return $this->doc->deleteDocente($codigo_docente);
    }
}

$doc=$_POST['txtCodigoDocente'];

$docente=new DocenteDeleteController();
$respuesta=$docente->eliminar($doc);

echo $respuesta;

?>