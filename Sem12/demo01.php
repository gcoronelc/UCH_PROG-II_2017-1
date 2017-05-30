<?php 

$dsn = 'mysql:dbname=eurekabank;host=localhost:3306';
$user = 'eureka';
$password = 'admin';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Conexion ok.';
} catch (PDOException $e) {
    echo 'Fallo la conexion: ' . $e->getMessage();
} 

?>

