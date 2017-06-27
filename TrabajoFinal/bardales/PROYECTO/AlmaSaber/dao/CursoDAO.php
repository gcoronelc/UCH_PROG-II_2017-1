<?php

require_once '../databases/Conexion.php';

class CursoDAO {

    function __construct() {
        
    }

    public function createCurso(CursoDTO $curso) {
        $rpt = 2;
        try {

            $codCurso = $this->findCurso($curso->getCodigo_curso());
            $nomCurso = $this->findNombreCurso($curso->getNombre_curso());
            if ($codCurso == null) {
                if ($nomCurso == null) {
                    $conexion = new Conexion();
                    $cn = $conexion->getConexion();
                    $sql = "INSERT INTO col_curso VALUES(null,:codigo_curso,:nombre_curso,:descripcion_curso,:fregistro_curso,:estado_curso,:col_Docente_id_docente)";

                    $statement = $cn->prepare($sql);

                    $statement->bindParam(":codigo_curso", $curso->getCodigo_curso());
                    $statement->bindParam(":nombre_curso", $curso->getNombre_curso());
                    $statement->bindParam(":descripcion_curso", $curso->getDescripcion_curso());
                    $statement->bindParam(":fregistro_curso", $curso->getFregistro_curso());
                    $statement->bindParam(":estado_curso", $curso->getEstado_curso());
                    $statement->bindParam(":col_Docente_id_docente", $curso->getCol_Docente_id_docente());

                    if ($statement->execute()) {
                        $rpt = 1;
                    }
                    $cn = null;
                } else {
                    $rpt = 4591;
                }
            } else {
                $rpt = 4592;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $rpt;
    }

    public function readAllCurso() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT "
                    . "col_curso.codigo_curso,"
                    . "col_curso.nombre_curso,"
                    . "col_curso.descripcion_curso,"
                    . "col_curso.fregistro_curso,"
                    . "col_curso.estado_curso,"
                    . "col_curso.col_Docente_id_docente,"
                    . "col_docente.id_docente,"
                    . "col_docente.nombre_docente,"
                    . "col_docente.ap_docente,"
                    . "col_docente.am_docente"
                    . " FROM col_curso INNER JOIN col_docente ON col_docente.id_docente=col_curso.col_Docente_id_docente ORDER BY fregistro_curso";
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

    public function updateCurso(CursoDTO $curso) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql="UPDATE col_curso SET nombre_curso=:nombre_curso,descripcion_curso=:descripcion_curso,estado_curso=:estado_curso,col_Docente_id_docente=:col_Docente_id_docente WHERE codigo_curso=:codigo_curso";
            $statement=$cn->prepare($sql);
            $statement->bindParam(":nombre_curso", $curso->getNombre_curso());
            $statement->bindParam(":descripcion_curso", $curso->getDescripcion_curso());
            $statement->bindParam(":estado_curso", $curso->getEstado_curso());
            $statement->bindParam(":col_Docente_id_docente", $curso->getCol_Docente_id_docente());
            $statement->bindParam(":codigo_curso", $curso->getCodigo_curso());
            if ($statement->execute()) {
                $rpt=1;
            }
        } catch (Exception $ex) {
            $rpt = $ex->getMessage();
        }

        return $rpt;
    }

    public function deleteCurso($codigo_curso) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "DELETE FROM col_curso WHERE codigo_curso=:codigo_curso";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":codigo_curso", $codigo_curso);
            if ($statement->execute()) {
                $rpt = 1;
            }
        } catch (Exception $ex) {
            $rpt = $ex->getMessage();
        }
        return $rpt;
    }

    public function findCurso($codigo_curso) {
        $arreglo = null;
        try {

            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT codigo_curso FROM col_curso WHERE codigo_curso=:codigo_curso";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":codigo_curso", $codigo_curso);
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

    public function findNombreCurso($nombre_curso) {
        $arreglo = null;
        try {

            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT nombre_curso FROM col_curso WHERE nombre_curso=:nombre_curso";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":nombre_curso", $nombre_curso);
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

    public function curActivo() {
        $arreglo = null;
        $cant = 0;
        $estado = 1;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT estado_curso FROM col_curso WHERE estado_curso=:estado";
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

    public function curDesactivo() {
        $arreglo = null;
        $cant = 0;
        $estado = 0;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT estado_curso FROM col_curso WHERE estado_curso=:estado";
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
