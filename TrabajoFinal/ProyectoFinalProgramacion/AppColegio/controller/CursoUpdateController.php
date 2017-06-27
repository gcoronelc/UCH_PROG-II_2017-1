<?php

require_once '../dao/CursoDAO.php';
require_once '../dto/CursoDTO.php';

date_default_timezone_set("America/Lima");

class CursoUpdateController {

    public $curso;

    function __construct() {
        $this->curso = new CursoDAO();
    }

    public function actualizarCurso(CursoDTO $curso) {
        return $this->curso->updateCurso($curso);
    }

}


$codigo_curso = isset($_POST['txtCodigoCurso']) ? $_POST['txtCodigoCurso'] : "";
$nombre_curso = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
$descripcion_curso = isset($_POST['txtDescripcion']) ? $_POST['txtDescripcion'] : "";
$fregistro_curso = isset($_POST['txtFregistro']) ? $_POST['txtFregistro'] : "";
$estado_curso = isset($_POST['txtEstado']) ? $_POST['txtEstado'] : 0;
$col_Docente_id_docente = isset($_POST['txtDocente']) ? $_POST['txtDocente'] : "";

$curso = new CursoDTO();
$curso->setCodigo_curso($codigo_curso);
$curso->setNombre_curso($nombre_curso);
$curso->setDescripcion_curso($descripcion_curso);
$curso->setFregistro_curso($fregistro_curso);
$curso->setEstado_curso($estado_curso);
$curso->setCol_Docente_id_docente($col_Docente_id_docente);

$actulizar= new CursoUpdateController();
$respuesta=$actulizar->actualizarCurso($curso);


echo $respuesta;

?>