<?php

require_once '../ds/AccesoDB.php';

//Clase que provee los servicios con las cuentas

class CuentaDAO{
    
    //Retorna los datos de la cuenta en un arreglo asociativo
    
    public function cosultarCuenta($cuenta){
        try {
            $query = "select * from cuenta where chr_cuencodigo = '$cuenta'";
            $db = AccesoDB::getInstancia();
            $lista = $db->executeQuery($query);
            $rec = null;
            
            if(count($lista) == 1){
                $rec = $lista[0];
            }
            return $rec;
        } catch (Exception $e) {
            throw $rec;
        }
    }
    
    //Retorna los movimientos de una cuenta en un arreglo
    
    public function consultarMovimientos($cuenta){
        try {
            $query = "select * from movimiento where chr_cuencodigo = '$cuenta'";
            $db = AccesoDB::getInstancia();
            $lista = $db->executeQuery($query);
            return $lista;
        } catch (Exception $ex) {
            throw $rec;
        }
    }
    
}

?>

