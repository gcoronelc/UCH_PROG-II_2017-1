<?php

class DocenteDTO {

    public $codigo_docente;
    public $dni_docente;
    public $nombre_docente;
    public $ap_docente;
    public $am_docente;
    public $sexo_docente;
    public $email_docente;
    public $telefono_docente;
    public $celular_docente;
    public $fregistro_docente;
    public $estado_docente;
    
    function __construct() {
        $args = func_get_args();
        $nargs = func_num_args();
        switch ($nargs) {
            case 0:
                self::__construct1();
                break;
            default:
                self::__construct2($args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6], $args[7], $args[8], $args[9],$args[10]);
                break;
        }
    }

    function __construct1() {
        
    }
    function __construct2($codigo_docente, $dni_docente, $nombre_docente, $ap_docente, $am_docente, $sexo_docente, $email_docente, $telefono_docente, $celular_docente, $fregistro_docente, $estado_docente) {
        $this->codigo_docente = $codigo_docente;
        $this->dni_docente = $dni_docente;
        $this->nombre_docente = $nombre_docente;
        $this->ap_docente = $ap_docente;
        $this->am_docente = $am_docente;
        $this->sexo_docente = $sexo_docente;
        $this->email_docente = $email_docente;
        $this->telefono_docente = $telefono_docente;
        $this->celular_docente = $celular_docente;
        $this->fregistro_docente = $fregistro_docente;
        $this->estado_docente = $estado_docente;
    }

    function getCodigo_docente() {
        return $this->codigo_docente;
    }

    function getDni_docente() {
        return $this->dni_docente;
    }

    function getNombre_docente() {
        return $this->nombre_docente;
    }

    function getAp_docente() {
        return $this->ap_docente;
    }

    function getAm_docente() {
        return $this->am_docente;
    }

    function getSexo_docente() {
        return $this->sexo_docente;
    }

    function getEmail_docente() {
        return $this->email_docente;
    }

    function getTelefono_docente() {
        return $this->telefono_docente;
    }

    function getCelular_docente() {
        return $this->celular_docente;
    }

    function getFregistro_docente() {
        return $this->fregistro_docente;
    }

    function getEstado_docente() {
        return $this->estado_docente;
    }

    function setCodigo_docente($codigo_docente) {
        $this->codigo_docente = $codigo_docente;
    }

    function setDni_docente($dni_docente) {
        $this->dni_docente = $dni_docente;
    }

    function setNombre_docente($nombre_docente) {
        $this->nombre_docente = $nombre_docente;
    }

    function setAp_docente($ap_docente) {
        $this->ap_docente = $ap_docente;
    }

    function setAm_docente($am_docente) {
        $this->am_docente = $am_docente;
    }

    function setSexo_docente($sexo_docente) {
        $this->sexo_docente = $sexo_docente;
    }

    function setEmail_docente($email_docente) {
        $this->email_docente = $email_docente;
    }

    function setTelefono_docente($telefono_docente) {
        $this->telefono_docente = $telefono_docente;
    }

    function setCelular_docente($celular_docente) {
        $this->celular_docente = $celular_docente;
    }

    function setFregistro_docente($fregistro_docente) {
        $this->fregistro_docente = $fregistro_docente;
    }

    function setEstado_docente($estado_docente) {
        $this->estado_docente = $estado_docente;
    }






}
