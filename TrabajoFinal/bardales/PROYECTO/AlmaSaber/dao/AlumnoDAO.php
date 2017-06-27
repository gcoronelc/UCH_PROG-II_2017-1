<?php

require_once '../databases/Conexion.php';

class AlumnoDAO {

    function __construct() {
        
    }

    public function createAlumno() {
        
    }

    public function readAllAlumno() {
        
    }

    public function updateAlumno() {
        
    }

    public function deleteAlumno() {
        
    }

    public function findAlumno($dni_alumno) {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT * FROM col_alumno WHERE dni_alumno=:dni_alumno";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":dni_alumno", $dni_alumno);
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
    
    public function findAlumno2($dni_alumno) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT * FROM col_alumno WHERE dni_alumno=:dni_alumno";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":dni_alumno", $dni_alumno);
            if ($statement->execute()) {
                $rpt=1;
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $rpt;
    }

}
