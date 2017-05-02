<?php

$datos["aa"] = "aaaa1"; 
$datos["bb"] = "bbbb1"; 
$datos["cc"] = "cccc1"; 
$datos["dd"] = "dddd1"; 
$datos["ee"] = "eeee1"; 

$texto = json_encode($datos);

header('Content-Type: application/json');
print_r($texto);

?>
