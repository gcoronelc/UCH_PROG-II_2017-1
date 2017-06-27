<?php

require_once '../databases/Conexion.php';

class GradoDAO {

    function __construct() {
        
    }

    public function createGrado() {
        
    }

    public function readAllGrado() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT col_grado.id_grado,col_grado.codigo_grado,col_grado.grado_grado,col_grado.col_nivel_id_nivel,col_grado.col_Seccion_id_seccion,col_grado.col_Turno_id_turno,col_grado.max_alumno,col_grado.cant_alumno,col_grado.finicio_grado,col_grado.ffin_grado,col_grado.estado_grado,"
                    . "col_nivel.descripcion_nivel,col_seccion.nombre_seccion,col_turno.descripcion_turno,col_turno.horario_turno "
                    . "FROM col_grado "
                    . "INNER JOIN col_nivel ON col_grado.col_nivel_id_nivel=col_nivel.id_nivel "
                    . "INNER JOIN col_seccion ON col_grado.col_Seccion_id_seccion=col_seccion.id_seccion "
                    . "INNER JOIN col_turno ON col_grado.col_Turno_id_turno=col_turno.id_turno ORDER BY col_grado.codigo_grado";
            $statement = $cn->prepare($sql);
            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $arreglo;
    }
    
    public function readAllGradoActivo() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT col_grado.id_grado,col_grado.codigo_grado,col_grado.grado_grado,col_grado.col_nivel_id_nivel,col_grado.col_Seccion_id_seccion,col_grado.col_Turno_id_turno,col_grado.max_alumno,col_grado.cant_alumno,col_grado.finicio_grado,col_grado.ffin_grado,col_grado.estado_grado,"
                    . "col_nivel.descripcion_nivel,col_seccion.nombre_seccion,col_turno.descripcion_turno,col_turno.horario_turno "
                    . "FROM col_grado "
                    . "INNER JOIN col_nivel ON col_grado.col_nivel_id_nivel=col_nivel.id_nivel "
                    . "INNER JOIN col_seccion ON col_grado.col_Seccion_id_seccion=col_seccion.id_seccion "
                    . "INNER JOIN col_turno ON col_grado.col_Turno_id_turno=col_turno.id_turno WHERE col_grado.estado_grado=1";
            $statement = $cn->prepare($sql);
            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $arreglo;
    }

    public function updateGrado(GradoDTO $grado) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "UPDATE col_grado SET grado_grado=:grado_grado,col_nivel_id_nivel=:col_nivel_id_nivel,col_Seccion_id_seccion=:col_Seccion_id_seccion,col_Turno_id_turno=:col_Turno_id_turno,max_alumno=:max_alumno,cant_alumno=:cant_alumno,finicio_grado=:finicio_grado,ffin_grado=:ffin_grado,estado_grado=:estado_grado WHERE codigo_grado=:codigo_grado";
            $statement = $cn->prepare($sql);
            $statement->bindParam(':grado_grado', $grado->getGrado_grado());
            $statement->bindParam(':col_nivel_id_nivel', $grado->getCol_nivel_id_nivel());
            $statement->bindParam(':col_Seccion_id_seccion', $grado->getCol_Seccion_id_seccion());
            $statement->bindParam(':col_Turno_id_turno', $grado->getCol_Turno_id_turno());
            $statement->bindParam(':max_alumno', $grado->getMax_alumno());
            $statement->bindParam(':cant_alumno', $grado->getCant_alumno());
            $statement->bindParam(':finicio_grado', $grado->getFinicio_grado());
            $statement->bindParam(':ffin_grado', $grado->getFfin_grado());
            $statement->bindParam(':estado_grado', $grado->getEstado_grado());
            $statement->bindParam(':codigo_grado', $grado->getCodigo_grado());

            if ($statement->execute()) {
                $rpt = 1;
            }
        } catch (Exception $ex) {
            $rpt = $ex->getMessage();
        }

        return $rpt;
    }

    public function deleteGrado($codigo_grado) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "DELETE FROM col_grado WHERE codigo_grado=:codigo_grado";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":codigo_grado", $codigo_grado);
            if ($statement->execute()) {
                $rpt = 1;
            }
        } catch (Exception $ex) {
            $rpt = $ex->getMessage();
        }
        return $rpt;
    }

    public function findGrado() {
        
    }

    public function graActivo() {
        $arreglo = null;
        $cant = 0;
        $estado = 1;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT estado_grado FROM col_grado WHERE estado_grado=:estado";
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

    public function graDesactivo() {
        $arreglo = null;
        $cant = 0;
        $estado = 0;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT estado_grado FROM col_grado WHERE estado_grado=:estado";
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
