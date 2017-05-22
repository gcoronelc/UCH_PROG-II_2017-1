<?php

include '../service/BancoService.php';

// Datos
$capital = $_REQUEST["capital"];
$tasa = $_REQUEST["tasa"];
$periodos = $_REQUEST["periodos"];

// Proceso
$servicio = new BancoService();
$importe = $servicio->procesarPrestamo($capital, $tasa, $periodos);

// Reporte
include '../view/main.php';

?>