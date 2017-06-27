<?php

class CursoDTO {

    public $codigo_curso;
    public $nombre_curso;
    public $descripcion_curso;
    public $fregistro_curso;
    public $estado_curso;
    public $col_Docente_id_docente;

    function __construct() {
        $args = func_get_args();
        $nargs = func_num_args();
        switch ($nargs) {
            case 1:
                self::__construct1();
                break;
            case 2:
                self::__construct2($args[0], $args[1], $args[2], $args[3], $args[4], $args[5]);
                break;
        }
    }

    function __construct1() {
        
    }

    function __construct2($codigo_curso, $nombre_curso, $descripcion_curso, $fregistro_curso, $estado_curso, $col_Docente_id_docente) {
        $this->codigo_curso = $codigo_curso;
        $this->nombre_curso = $nombre_curso;
        $this->descripcion_curso = $descripcion_curso;
        $this->fregistro_curso = $fregistro_curso;
        $this->estado_curso = $estado_curso;
        $this->col_Docente_id_docente = $col_Docente_id_docente;
    }

    function getCodigo_curso() {
        return $this->codigo_curso;
    }

    function getNombre_curso() {
        return $this->nombre_curso;
    }

    function getDescripcion_curso() {
        return $this->descripcion_curso;
    }

    function getFregistro_curso() {
        return $this->fregistro_curso;
    }

    function getEstado_curso() {
        return $this->estado_curso;
    }

    function getCol_Docente_id_docente() {
        return $this->col_Docente_id_docente;
    }

    function setCodigo_curso($codigo_curso) {
        $this->codigo_curso = $codigo_curso;
    }

    function setNombre_curso($nombre_curso) {
        $this->nombre_curso = $nombre_curso;
    }

    function setDescripcion_curso($descripcion_curso) {
        $this->descripcion_curso = $descripcion_curso;
    }

    function setFregistro_curso($fregistro_curso) {
        $this->fregistro_curso = $fregistro_curso;
    }

    function setEstado_curso($estado_curso) {
        $this->estado_curso = $estado_curso;
    }

    function setCol_Docente_id_docente($col_Docente_id_docente) {
        $this->col_Docente_id_docente = $col_Docente_id_docente;
    }

}
