<?php

class TurnoDAO {

    function __construct() {
        
    }

    public function createTurno() {
        
    }

    public function readAllTurno() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT id_turno,descripcion_turno,horario_turno FROM col_turno";
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

    public function updateTurno() {
        
    }

    public function deleteTurno() {
        
    }

    public function findTurno() {
        
    }

}
