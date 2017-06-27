<?php

require_once '../dao/GradoDAO.php';
date_default_timezone_set("America/Lima");

class GradoDeleteController {
    public $grado;

    function __construct() {
        $this->grado = new GradoDAO();
    }

    public function eliminarGrado($codigo_grado) {
        return $this->grado->deleteGrado($codigo_grado);
    }
}

$codigo_grado=  isset($_POST['txtCodigoGrado']);

$delete= new GradoDeleteController();
$respuesta=$delete->eliminarGrado($codigo_grado);

echo $respuesta;
?>

