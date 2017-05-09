<?php

require_once '../dao/CuentaDAO.php';

class CuentaModel{
    
    public function consultarCuenta($cuenta){
        try {
            $dao = new CuentaDAO();
            $rec = $dao->consultarCuenta($cuenta);
            return $rec;
        } catch (Exception $e) {
            throw $e;
        }
    }
    
    public function consultarMovimientos($cuenta){
        try {
            $dao = new CuentaDAO();
            $lista = $dao->consultarMovimientos($cuenta);
            return $lista;
        } catch (Exception $ex) {
            throw $e;
        }
    }
    
}

?>
