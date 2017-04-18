<?php 
session_start();

// Dato
$ciudad = $_REQUEST["ciudad"];

// Agregarlo a session
$lista = array();
if(isset($_SESSION["lista"])){
	$lista =$_SESSION["lista"];
}
$lista[] = $ciudad;
$_SESSION["lista"] = $lista;

$mensaje = "Ciudad $ciudad ya se encuentra en la lista.";

//echo "Todo bien";

include("../view/agregar.php");
?>