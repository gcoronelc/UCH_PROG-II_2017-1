<?php

class GradoDTO {

    public $codigo_grado;
    public $grado_grado;
    public $col_nivel_id_nivel;
    public $col_Seccion_id_seccion;
    public $col_Turno_id_turno;
    public $max_alumno;
    public $cant_alumno;
    public $finicio_grado;
    public $ffin_grado;
    public $estado_grado;

    function __construct($codigo_grado, $grado_grado, $col_nivel_id_nivel, $col_Seccion_id_seccion, $col_Turno_id_turno, $max_alumno, $cant_alumno, $finicio_grado, $ffin_grado, $estado_grado) {
        $this->codigo_grado = $codigo_grado;
        $this->grado_grado = $grado_grado;
        $this->col_nivel_id_nivel = $col_nivel_id_nivel;
        $this->col_Seccion_id_seccion = $col_Seccion_id_seccion;
        $this->col_Turno_id_turno = $col_Turno_id_turno;
        $this->max_alumno = $max_alumno;
        $this->cant_alumno = $cant_alumno;
        $this->finicio_grado = $finicio_grado;
        $this->ffin_grado = $ffin_grado;
        $this->estado_grado = $estado_grado;
    }

    function getCodigo_grado() {
        return $this->codigo_grado;
    }

    function getGrado_grado() {
        return $this->grado_grado;
    }

    function getCol_nivel_id_nivel() {
        return $this->col_nivel_id_nivel;
    }

    function getCol_Seccion_id_seccion() {
        return $this->col_Seccion_id_seccion;
    }

    function getCol_Turno_id_turno() {
        return $this->col_Turno_id_turno;
    }

    function getMax_alumno() {
        return $this->max_alumno;
    }

    function getCant_alumno() {
        return $this->cant_alumno;
    }

    function getFinicio_grado() {
        return $this->finicio_grado;
    }

    function getFfin_grado() {
        return $this->ffin_grado;
    }

    function getEstado_grado() {
        return $this->estado_grado;
    }

    function setCodigo_grado($codigo_grado) {
        $this->codigo_grado = $codigo_grado;
    }

    function setGrado_grado($grado_grado) {
        $this->grado_grado = $grado_grado;
    }

    function setCol_nivel_id_nivel($col_nivel_id_nivel) {
        $this->col_nivel_id_nivel = $col_nivel_id_nivel;
    }

    function setCol_Seccion_id_seccion($col_Seccion_id_seccion) {
        $this->col_Seccion_id_seccion = $col_Seccion_id_seccion;
    }

    function setCol_Turno_id_turno($col_Turno_id_turno) {
        $this->col_Turno_id_turno = $col_Turno_id_turno;
    }

    function setMax_alumno($max_alumno) {
        $this->max_alumno = $max_alumno;
    }

    function setCant_alumno($cant_alumno) {
        $this->cant_alumno = $cant_alumno;
    }

    function setFinicio_grado($finicio_grado) {
        $this->finicio_grado = $finicio_grado;
    }

    function setFfin_grado($ffin_grado) {
        $this->ffin_grado = $ffin_grado;
    }

    function setEstado_grado($estado_grado) {
        $this->estado_grado = $estado_grado;
    }

}
