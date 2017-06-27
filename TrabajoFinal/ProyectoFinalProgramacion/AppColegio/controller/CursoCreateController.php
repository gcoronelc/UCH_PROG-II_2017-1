<?php

require_once '../dao/CursoDAO.php';
require_once '../dto/CursoDTO.php';
date_default_timezone_set("America/Lima");

class CursoCreateController {

    public $curso;

    function __construct() {
        $this->curso = new CursoDAO();
    }

    public function crearCurso(CursoDTO $curso) {
        return $this->curso->createCurso($curso);
    }

    public function getNewCodigo(){
       return $this->curso->getNewCodigo();
    }

}

if(isset($_POST['prev_fn'])) # funciones alternas al flujo normal
{
	switch ($_POST['prev_fn'])
	{
		case 'codigo':
			$newcur = new CursoCreateController();
			$respuesta = $newcur->getNewCodigo(); # sugerencia de nuevo código
			break;
		
		default:
			$respuesta = '';
			break;
	}

	echo $respuesta;
}
else
{
	$codigo_curso = isset($_POST['txtCodigoCurso']) ? $_POST['txtCodigoCurso'] : "";
	$nombre_curso = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
	$descripcion_curso = isset($_POST['txtDescripcion']) ? $_POST['txtDescripcion'] : "";
	$fregistro_curso = date("Y-m-d H:i:s.u");
	$estado_curso = 1;
	$col_Docente_id_docente = isset($_POST['txtDocente']) ? $_POST['txtDocente'] : "";

	$curso = new CursoDTO();
	$curso->setCodigo_curso($codigo_curso);
	$curso->setNombre_curso($nombre_curso);
	$curso->setDescripcion_curso($descripcion_curso);
	$curso->setFregistro_curso($fregistro_curso);
	$curso->setEstado_curso($estado_curso);
	$curso->setCol_Docente_id_docente($col_Docente_id_docente);
	;

	$crear = new CursoCreateController();
	$respuesta = $crear->crearCurso($curso);

	echo $respuesta;
}
?>
