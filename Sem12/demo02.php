<?php

$dsn = 'mysql:dbname=eurekabank;host=localhost:3306';
$user = 'eureka';
$password = 'admin';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES UTF8');
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
    $dbh->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    $stm = $dbh->query("select * from empleado");
    while ($row = $stm->fetch()) {
        echo("{$row["vch_emplnombre"]} {$row["vch_emplpaterno"]}<br>");
        //echo("{$row->vch_emplnombre}<br>");
    }
} catch (PDOException $e) {
    echo 'Fallo la conexion: ' . $e->getMessage();
}
?>

