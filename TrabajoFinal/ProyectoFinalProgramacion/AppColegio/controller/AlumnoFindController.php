<?php
session_start();
require_once '../dao/AlumnoDAO.php';

class AlumnoFindController {

    public $alumno;

    function __construct() {
        $this->alumno = new AlumnoDAO();
    }

    public function buscarAlumno($dni_alumno) {
        return $this->alumno->findAlumno($dni_alumno);
    }

}

$dni_alumno = $_GET['dni'];

$buscar = new AlumnoFindController();
$respuesta = $buscar->buscarAlumno($dni_alumno);

if (isset($respuesta)) {
    echo 1;
    $_SESSION['alumno_b']=$respuesta;
} else {
    echo 2;
    $_SESSION['alumno_b']=null;
}
?>
