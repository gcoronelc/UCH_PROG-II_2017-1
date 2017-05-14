<?php 

//Archivo incluido
include '../Servicios/servicios.php';

//Variables
$user = " ";
$pass = " ";
$Nombre= " ";
$logeo = 0;

//Datos
$user = $_POST["usuario"];
$pass = $_POST["password"];

//Procesos
$logeo = Logeo($user, $pass);





 ?>