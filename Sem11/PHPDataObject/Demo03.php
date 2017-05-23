<?php

$dsn = 'mysql:dbname=eurekabank;host=localhost';
$user = 'eureka';
$password = 'admin';
try {
    $dbh = new PDO($dsn, $user, $password);
    $stm = $dbh->query("select * from empleado");
    $lista = $stm->fetchAll();
    foreach ( $lista as $row ) {
        echo("{$row["vch_emplnombre"]} - {$row["vch_emplpaterno"]}<br>");
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

