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
            $conexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db . ";", $this->user, $this->pass);
        } catch (Exception $ex) {
            throw $ex;
        }
        return $conexion;
    }

}
