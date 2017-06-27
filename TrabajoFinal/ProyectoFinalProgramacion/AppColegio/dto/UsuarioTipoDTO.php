<?php

class UsuarioTipoDTO {
    public $descripcion_tu;
    public $seguridad_tu;
    public $planificacion_tu;
    public $matricula_tu;
    public $reportes_tu;

    function __construct($descripcion_tu, $seguridad_tu, $planificacion_tu, $matricula_tu, $reportes_tu) {
        $this->descripcion_tu = $descripcion_tu;
        $this->seguridad_tu = $seguridad_tu;
        $this->planificacion_tu = $planificacion_tu;
        $this->matricula_tu = $matricula_tu;
        $this->reportes_tu = $reportes_tu;
    }
    function getDescripcion_tu() {
        return $this->descripcion_tu;
    }

    function getSeguridad_tu() {
        return $this->seguridad_tu;
    }

    function getPlanificacion_tu() {
        return $this->planificacion_tu;
    }

    function getMatricula_tu() {
        return $this->matricula_tu;
    }

    function getReportes_tu() {
        return $this->reportes_tu;
    }

    function setDescripcion_tu($descripcion_tu) {
        $this->descripcion_tu = $descripcion_tu;
    }

    function setSeguridad_tu($seguridad_tu) {
        $this->seguridad_tu = $seguridad_tu;
    }

    function setPlanificacion_tu($planificacion_tu) {
        $this->planificacion_tu = $planificacion_tu;
    }

    function setMatricula_tu($matricula_tu) {
        $this->matricula_tu = $matricula_tu;
    }

    function setReportes_tu($reportes_tu) {
        $this->reportes_tu = $reportes_tu;
    }


    



}
