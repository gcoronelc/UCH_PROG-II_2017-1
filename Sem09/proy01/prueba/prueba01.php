<?php

include '../service/BancoService.php';

// Datos
$capital = 1200.00;
$tasa = 0.04;
$periodos = 1;

// Proceso
$servicio = new BancoService();
$importe = $servicio->procesarPrestamo($capital, $tasa, $periodos);

// Reporte

echo "Capital: $capital<br/>";
echo "Tasa: $tasa<br/>";
echo "Periodos: $periodos<br/>";
echo "Importe: $importe<br/>";

?>