<?php

require_once 'BaseDatos.php';
$bd = new BaseDatos();
$query = "select * from empleado";
$lista = $bd->executeQuery($query);
foreach ($lista as $rec) {
  echo("{$rec["vch_emplpaterno"]} {$rec["vch_emplnombre"]}<br>");
}

$bd->dispose();
?>
