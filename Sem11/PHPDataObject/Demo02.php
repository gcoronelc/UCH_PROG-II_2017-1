<?php

$dsn = 'mysql:dbname=eurekabank;host=localhost';
$user = 'eureka';
$password = 'admin';
try {
    $dbh = new PDO($dsn, $user, $password);
    $stm = $dbh->query("select * from empleado");
    while ($row = $stm->fetch()) {
        echo("{$row["vch_emplnombre"]}<br>");
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

