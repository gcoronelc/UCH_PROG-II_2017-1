<?php

require_once '../dao/EmpleadoDAO.php';

class LogonModel{
    
    //Valida los datos del empleado
    //Retorna el registro del empleado como un arreglo asociativo
    
    public function validar($usuario, $clave){
        try {
            $dao = new EmpleadoDAO();
            $rec = $dao->consultarPorUsuario($usuario);
            if ($re == null){
                throw new Exception("Usuario no existe");
            }
            if ($rec["vch_emplclave"] != $clave){
                throw new Exception("Clave incorrecta");
            }
            return $rec;
        } catch (Exception $ex) {
            throw $e;
        }
    }
    
}

?>

