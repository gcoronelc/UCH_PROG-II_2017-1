<?php

require_once '../dao/CursoDAO.php';
date_default_timezone_set("America/Lima");

class CursoDeleteController {

    public $curso;

    function __construct() {
        $this->curso = new CursoDAO();
    }

    public function eliminarCurso($codigo_curso) {
        return $this->curso->deleteCurso($codigo_curso);
    }

}

$codigo_curso = $_POST['txtCodigoCurso'];

$curso = new CursoDeleteController();
$respuesta = $curso->eliminarCurso($codigo_curso);
echo $respuesta;
?>
