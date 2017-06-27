<?php

class Conexion {

    public $host = "localhost";
    public $user = "eureka";
    public $pass = "admin";
    public $db = "proyecto_php_col";

    function __construct() {
        
    }

    public function getConexion() {
        try {
            $conexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db . ";", $this->user, $this->pass, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ));
        } catch (Exception $ex) {
            throw $ex;
        }
        return $conexion;
    }

}
