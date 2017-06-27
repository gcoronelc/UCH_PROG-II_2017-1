<?php

require_once '../dao/MatriculaDAO.php';

class MatriculaCreateController {

    public $matricula;

    function __construct() {
        $this->matricula = new MatriculaDAO();
    }
    
    public function MatricularAlumno(MatriculaDTO $matricula){
        return $this->matricula->createMatricula($matricula);
    }

}

   $codigo_matricula;
   $col_Alumno_id_alumno;
   $fmatricula_matricula;
   $estado_matricula;
   $col_Grado_id_grado;
   $pago_matricula;
   
   $matricula=new MatriculaDTO($codigo_matricula, $col_Alumno_id_alumno, $fmatricula_matricula, $estado_matricula, $col_Grado_id_grado, $pago_matricula);
   $matricular= new MatriculaCreateController();
   $respuesta=$matricular->MatricularAlumno($matricula);
   
   echo $respuesta;

?>