<?php
// Variables
$numero = 0;
$primo = "SI";
$par_impar = "Par";
$capicua = "No";


// Dato
$numero = $_REQUEST["num"];

// Proceso 1: Primo
for($n = 2; $n < $numero; $n++){
  if( ($numero % $n) == 0 ){
    $primo = "NO";
    break;
  }
}


// Proceso 2: Par o Impar





// Proceso 3: Capicua




        
        
// Reporte
include '../coronel_view/repo.php';



?>