<?php

// Servicio
function esPrimo($numero) {
  $primo = "SI";
  for ($n = 2; $n < $numero; $n++) {
    if (($numero % $n) == 0) {
      $primo = "NO";
      break;
    }
  }
  return $primo;
}

function esParImpar($numero) {
  return "NO SE";
}

function esCapicua($numero) {
  return "NO SE";
}

?>