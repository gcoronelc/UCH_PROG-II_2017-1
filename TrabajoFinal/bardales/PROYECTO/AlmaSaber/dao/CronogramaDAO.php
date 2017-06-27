<?php

require_once '../databases/Conexion.php';

class CronogramaDAO {

    function __construct() {
        
    }

    public function createCronograma() {
        
    }

    public function readAllCronograma() {
         $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT "
                    . "col_cronograma.col_Matricula_id_matricula,"
                    . "col_cronograma.fvencimiento_cronograma,"
                    . "col_matricula.codigo_matricula,"
                    . "col_matricula.col_Alumno_id_alumno,"
                    . "col_matricula.col_Grado_id_grado,"
                    . "col_matricula.pago_matricula,"
                    . "col_matricula.fmatricula_matricula,"
                    . "col_matricula.estado_matricula,"
                    . "col_alumno.dni_alumno,"
                    . "col_alumno.nombre_alumno,"
                    . "col_alumno.ap_alumno,"
                    . "col_alumno.am_alumno,"
                    . "col_alumno.email_alumno,"
                    . "col_alumno.telefono_alumno,"
                    . "col_alumno.celular_alumno,"
                    . "col_alumno.fregistro_alumno,"
                    . "col_alumno.estado_alumno,"
                    . "col_grado.codigo_grado,"
                    . "col_grado.grado_grado,"
                    . "col_grado.col_nivel_id_nivel,"
                    . "col_grado.col_Seccion_id_seccion,"
                    . "col_grado.col_Turno_id_turno,"
                    . "col_grado.max_alumno,"
                    . "col_grado.cant_alumno,"
                    . "col_grado.finicio_grado,"
                    . "col_grado.ffin_grado,"
                    . "col_grado.estado_grado,"
                    . "col_nivel.id_nivel,"
                    . "col_nivel.descripcion_nivel,"
                    . "col_nivel.pension_nivel,"
                    . "col_seccion.id_seccion,"
                    . "col_seccion.nombre_seccion,"
                    . "col_turno.id_turno,"
                    . "col_turno.descripcion_turno,"
                    . "col_turno.horario_turno"
                    . " FROM col_cronograma"
                    . " INNER JOIN col_matricula"
                    . " ON col_cronograma.col_Matricula_id_matricula=col_matricula.id_matricula"
                    . " INNER JOIN col_alumno"
                    . " ON col_matricula.col_Alumno_id_alumno=col_alumno.id_alumno"
                    . " INNER JOIN col_grado"
                    . " ON col_matricula.col_Grado_id_grado=col_grado.id_grado"
                    . " INNER JOIN col_nivel"
                    . " ON col_grado.col_nivel_id_nivel=col_nivel.id_nivel"
                    . " INNER JOIN col_seccion"
                    . " ON col_grado.col_Seccion_id_seccion=col_seccion.id_seccion"
                    . " INNER JOIN col_turno"
                    . " ON col_grado.col_Turno_id_turno=col_turno.id_turno"
                    . " ORDER BY fmatricula_matricula";
            $statement = $cn->prepare($sql);
            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $arreglo;
    }

    public function updateCronograma() {
        
    }

    public function deleteCronograma() {
        
    }

    public function findCronograma() {
        
    }

}
