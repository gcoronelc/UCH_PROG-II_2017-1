<?php

require_once 'BaseDatos.php';
$bd = new BaseDatos();
$query = "select * from cuenta";
$lista = $bd->executeQuery($query);
foreach ($lista as $rec) {
  echo("{$rec["chr_cuencodigo"]} {$rec["dec_cuensaldo"]}<br>");
}

?>
