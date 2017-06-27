<?php

require_once '../databases/Conexion.php';

class NivelDAO {

    function __construct() {
        
    }

    public function createNivel() {
        
    }

    public function readAllNivel() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT id_nivel,descripcion_nivel FROM col_nivel";
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

    public function updateNivel() {
        
    }

    public function deleteNivel() {
        
    }

    public function findNivel() {
        
    }

}
