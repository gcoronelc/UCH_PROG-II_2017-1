<?php

class BancoService {
    
    public function procesarPrestamo($capital, $tasa, $periodos) {
        $importe = $capital * pow(1 + $tasa, $periodos);
        return $importe;
    }
    
    
}
