<?php

class NivelDTO {

    public $descripcion_nivel;
    public $pension_nivel;

    function __construct($descripcion_nivel, $pension_nivel) {
        $this->descripcion_nivel = $descripcion_nivel;
        $this->pension_nivel = $pension_nivel;
    }

    function getDescripcion_nivel() {
        return $this->descripcion_nivel;
    }

    function getPension_nivel() {
        return $this->pension_nivel;
    }

    function setDescripcion_nivel($descripcion_nivel) {
        $this->descripcion_nivel = $descripcion_nivel;
    }

    function setPension_nivel($pension_nivel) {
        $this->pension_nivel = $pension_nivel;
    }



}
