<?php

require_once '../ds/AccesoDB.php';

class EmpleadoDAO{
    
    //Consulta los datos de un mpleado por su nombre de usuario
    
    public function consultarPorUsuario($usuario){
        try {
            $query = "select * from empleado where vch_emplusuario = '$usuario'";
            $db = AccesoDB::getInstancia();
            $lista = $db->executeQuery($query);
            $rec = null;
            if (count($lista) == 1){
                $rec = $lista[0];
            }
            return $rec;
        } catch (Exception $e) {
            throw $rec;
        }
    }
    
}

?>

