<?php

include '../coronel_service/servicios.php';

// Variables
$numero = 0;
$primo = "SI";
$par_impar = "Par";
$capicua = "No";


// Dato
$numero = $_REQUEST["num"];

// Proceso
$primo = esPrimo($numero);        
$par_impar = esParImpar($numero);        
$capicua = esCapicua($numero);        
        
// Reporte
include '../coronel_view/repo.php';

?>