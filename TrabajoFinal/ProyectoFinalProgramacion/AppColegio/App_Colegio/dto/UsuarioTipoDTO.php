<?php

class UsuarioTipoDTO {
    public $descripcion_tu;
    
    function __construct($descripcion_tu) {
        $this->descripcion_tu = $descripcion_tu;
    }
    
    function getDescripcion_tu() {
        return $this->descripcion_tu;
    }

    function setDescripcion_tu($descripcion_tu) {
        $this->descripcion_tu = $descripcion_tu;
    }



}
