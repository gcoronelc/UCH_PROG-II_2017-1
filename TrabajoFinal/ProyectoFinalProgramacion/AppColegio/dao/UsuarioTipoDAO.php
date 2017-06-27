<?php

require_once '../databases/Conexion.php';

class UsuarioTipoDAO {

    function __construct() {
        
    }

    public function createTUsuario(UsuarioTipoDTO $tipo) {
        $rpt = 2;
        $descripcion_tu = $tipo->getDescripcion_tu();
        $seguridad_tu = $tipo->getSeguridad_tu();
        $planificacion_tu = $tipo->getPlanificacion_tu();
        $matricula_tu = $tipo->getMatricula_tu();
        $reportes_tu = $tipo->getReportes_tu();

        try {
            if ($this->findTUsuario($tipo->getDescripcion_tu()) == null) {

                $conexion = new Conexion();
                $cn = $conexion->getConexion();
                $sql = "INSERT INTO col_tipousuario VALUES (null,:descripcion_tu,:seguridad_tu,:planificacion_tu,:matricula_tu,:reportes_tu)";
                $statement = $cn->prepare($sql);
                $statement->bindParam(":descripcion_tu", $descripcion_tu, PDO::PARAM_STR);
                $statement->bindParam(":seguridad_tu", $seguridad_tu, PDO::PARAM_INT);
                $statement->bindParam(":planificacion_tu", $planificacion_tu, PDO::PARAM_INT);
                $statement->bindParam(":matricula_tu", $matricula_tu, PDO::PARAM_INT);
                $statement->bindParam(":reportes_tu", $reportes_tu, PDO::PARAM_INT);
                if ($statement->execute()) {
                    $rpt = 1;
                }
                $cn = null;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $rpt;
    }

    public function readAllTUsuario() {
        
    }

    public function updateTUsuario() {
        
    }

    public function deleteTUsuario($descripcion_tu) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "DELETE FROM col_tipousuario WHERE descripcion_tu=:descripcion_tu";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":descripcion_tu", $descripcion_tu, PDO::PARAM_STR);
            if ($statement->execute()) {
                $rpt = 1;
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $rpt;
    }

    public function findTUsuario($descripcion_tu) {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT descripcion_tu FROM col_tipousuario WHERE descripcion_tu=:descripcion_tu";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":descripcion_tu", $descripcion_tu, PDO::PARAM_STR);
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

    public function listTUsuario() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT "
                    . "id_tipousuario,"
                    . "descripcion_tu,"
                    . "seguridad_tu,"
                    . "planificacion_tu,"
                    . "matricula_tu,"
                    . "reportes_tu"
                    . " FROM col_tipousuario";
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

}
