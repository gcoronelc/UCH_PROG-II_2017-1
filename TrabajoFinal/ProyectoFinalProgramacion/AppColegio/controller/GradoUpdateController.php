<?php

require_once '../dao/GradoDAO.php';
require_once '../dto/GradoDTO.php';
date_default_timezone_set("America/Lima");

class GradoUpdateController {

    public $grado;

    function __construct() {
        $this->grado = new GradoDAO();
    }

    public function actualizarGrado(GradoDTO $grado) {
        return $this->grado->updateGrado($grado);
    }

}

$codigo_grado = isset($_POST['txtCodigoGrado']) ? $_POST['txtCodigoGrado'] : '';
$grado_grado = isset($_POST['txtGrado']) ? $_POST['txtGrado'] : '';
$col_nivel_id_nivel = isset($_POST['txtNivel']) ? $_POST['txtNivel'] : '';
$col_Seccion_id_seccion = isset($_POST['txtSeccion']) ? $_POST['txtSeccion'] : '';
$col_Turno_id_turno = isset($_POST['txtTurno']) ? $_POST['txtTurno'] : '';
$max_alumno = isset($_POST['txtMaxAlum']) ? $_POST['txtMaxAlum'] : '';
$cant_alumno = isset($_POST['txtCantAlum']) ? $_POST['txtCantAlum'] : '';
$finicio_grado = isset($_POST['txtFechaInicio']) ? $_POST['txtFechaInicio'] : '';
$ffin_grado = isset($_POST['txtFechaFin']) ? $_POST['txtFechaFin'] : '';
$estado_grado = isset($_POST['txtEstado']) ? $_POST['txtEstado'] : '';

$grado = new GradoDTO($codigo_grado, $grado_grado, $col_nivel_id_nivel, $col_Seccion_id_seccion, $col_Turno_id_turno, $max_alumno, $cant_alumno, $finicio_grado, $ffin_grado, $estado_grado);
$update = new GradoUpdateController();
$respuesta = $update->actualizarGrado($grado);
echo $respuesta;
?>
