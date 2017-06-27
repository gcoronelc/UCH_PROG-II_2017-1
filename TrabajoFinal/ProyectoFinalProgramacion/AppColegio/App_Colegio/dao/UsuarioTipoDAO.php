<?php

class UsuarioTipoDAO {

    function __construct() {
        
    }

    public function createTUsuario() {
        
    }

    public function readAllTUsuario() {
        
    }

    public function updateTUsuario() {
        
    }

    public function deleteTUsuario() {
        
    }

    public function findTUsuario() {
        
    }

    public function listTUsuario() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT "
                    . "id_tipousuario,"
                    . "descripcion_tu"
                    . " FROM col_tipousuario";
            $statement = $cn->prepare($sql);
            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
            }
        } catch (Exception $ex) {
            throw $ex;
        }
        return $arreglo;
    }

}
