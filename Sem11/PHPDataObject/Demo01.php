<?php

$dsn = 'mysql:dbname=eurekabank;host=localhost';
$user = 'eureka';
$password = 'admin';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Conexión ok.';
} catch (PDOException $e) {
    echo "Error";
    echo 'Falló la conexión: ' . $e->getMessage();
}
?>

