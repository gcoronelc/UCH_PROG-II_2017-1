<?php
require '../db/AccesoDB.php';
require '../service/ClienteService.php';


// Dato
$criterio = $_POST["criterio"];

// Proceso
$service = new ClienteService();
$lista = $service->getClientes($criterio);

// Reporte
include '../view/clientes.php';
?>