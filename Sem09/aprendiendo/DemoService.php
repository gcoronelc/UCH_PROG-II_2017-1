<?php

class DemoService {

    private static $nombre = "Gustavo";
    
    public static function showNombre() {
        echo "Hola : " . self::$nombre;
        // echo "Hola : Gustavo";
    }
    
    
}


DemoService::showNombre();

?>