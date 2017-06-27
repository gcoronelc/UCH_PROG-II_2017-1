<?php

class TurnoDTO {

    public $descripcion_turno;
    public $horario_turno;

    function __construct($descripcion_turno, $horario_turno) {
        $this->descripcion_turno = $descripcion_turno;
        $this->horario_turno = $horario_turno;
    }

    function getDescripcion_turno() {
        return $this->descripcion_turno;
    }

    function getHorario_turno() {
        return $this->horario_turno;
    }

    function setDescripcion_turno($descripcion_turno) {
        $this->descripcion_turno = $descripcion_turno;
    }

    function setHorario_turno($horario_turno) {
        $this->horario_turno = $horario_turno;
    }

}
