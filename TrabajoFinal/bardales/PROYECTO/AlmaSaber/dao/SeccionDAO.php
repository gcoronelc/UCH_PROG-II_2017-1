<?php

class SeccionDAO {

    function __construct() {
        
    }

    public function createSeccion() {
        
    }

    public function readAllSeccion() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT id_seccion,nombre_seccion FROM col_seccion";
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

    public function updateSeccion() {
        
    }

    public function deleteSeccion() {
        
    }

    public function findSeccion() {
        
    }

}
