<?php

require_once '../databases/Conexion.php';

class MatriculaDAO {

    function __construct() {
        
    }

    public function createMatricula(MatriculaDTO $matricula) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "INSERT INTO col_matricula VALUES(nul,:codigo_matricula,:col_Alumno_id_alumno,:col_Grado_id_grado,:pago_matricula,:fmatricula_matricula,:estado_matricula)";
            $statement = $cn->prepare($sql);
            $statement->bindParam(':codigo_matricula', $matricula->getCodigo_matricula());
            $statement->bindParam(':col_Alumno_id_alumno', $matricula->getCol_Alumno_id_alumno());
            $statement->bindParam(':col_Grado_id_grado', $matricula->getCol_Grado_id_grado());
            $statement->bindParam(':pago_matricula', $matricula->getPago_matricula());
            $statement->bindParam(':fmatricula_matricula', $matricula->getFmatricula_matricula());
            $statement->bindParam(':estado_matricula', $matricula->getEstado_matricula());
            if ($statement->execute()) {
                $rpt = 1;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        $rpt = 1;
    }

    public function readAllMatricula() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT "
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
                    . " FROM col_matricula"
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
    
   

    public function updateMatricula(MatriculaDTO $matricula) {
        
    }

    public function deleteMatricula($codigo_matricula) {
        
    }

    public function findMatricula($codigo_matricula) {
        
    }

    public function matActivo() {
        $arreglo = null;
        $cant = 0;
        $estado = 1;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT estado_matricula FROM col_matricula WHERE estado_matricula=:estado";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":estado", $estado);

            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
                $cant = count($arreglo);
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $cant;
    }

    public function matDesactivo() {
        $arreglo = null;
        $cant = 0;
        $estado = 0;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT estado_matricula FROM col_matricula WHERE estado_matricula=:estado";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":estado", $estado);

            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
                $cant = count($arreglo);
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $cant;
    }

}
