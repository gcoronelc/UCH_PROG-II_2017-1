<?php

class MatriculaDTO {

    public $codigo_matricula;
    public $col_Alumno_id_alumno;
    public $fmatricula_matricula;
    public $estado_matricula;
    public $col_Grado_id_grado;
    public $pago_matricula;

    function __construct($codigo_matricula, $col_Alumno_id_alumno, $fmatricula_matricula, $estado_matricula, $col_Grado_id_grado, $pago_matricula) {
        $this->codigo_matricula = $codigo_matricula;
        $this->col_Alumno_id_alumno = $col_Alumno_id_alumno;
        $this->fmatricula_matricula = $fmatricula_matricula;
        $this->estado_matricula = $estado_matricula;
        $this->col_Grado_id_grado = $col_Grado_id_grado;
        $this->pago_matricula = $pago_matricula;
    }

    function getCodigo_matricula() {
        return $this->codigo_matricula;
    }

    function getCol_Alumno_id_alumno() {
        return $this->col_Alumno_id_alumno;
    }

    function getFmatricula_matricula() {
        return $this->fmatricula_matricula;
    }

    function getEstado_matricula() {
        return $this->estado_matricula;
    }

    function getCol_Grado_id_grado() {
        return $this->col_Grado_id_grado;
    }

    function getPago_matricula() {
        return $this->pago_matricula;
    }

    function setCodigo_matricula($codigo_matricula) {
        $this->codigo_matricula = $codigo_matricula;
    }

    function setCol_Alumno_id_alumno($col_Alumno_id_alumno) {
        $this->col_Alumno_id_alumno = $col_Alumno_id_alumno;
    }

    function setFmatricula_matricula($fmatricula_matricula) {
        $this->fmatricula_matricula = $fmatricula_matricula;
    }

    function setEstado_matricula($estado_matricula) {
        $this->estado_matricula = $estado_matricula;
    }

    function setCol_Grado_id_grado($col_Grado_id_grado) {
        $this->col_Grado_id_grado = $col_Grado_id_grado;
    }

    function setPago_matricula($pago_matricula) {
        $this->pago_matricula = $pago_matricula;
    }

}
