<?php

require '../db/AccesoDB.php';
require '../service/ClienteService.php';

try {
    $service = new ClienteService();
    $lista = $service->getClientes("RO");
    foreach ($lista as $r) {
        echo "{$r["paterno"]} {$r["materno"]} {$r["nombre"]}<br/>";
    }    
    
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>