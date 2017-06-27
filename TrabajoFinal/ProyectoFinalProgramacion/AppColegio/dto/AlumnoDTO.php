<?php

class AlumnoDTO {
  public $dni_alumno;
  public $nombre_alumno;
  public $ap_alumno;
  public $am_alumno;
  public $email_alumno;
  public $telefono_alumno;
  public $celular_alumno;
  public $fregistro_alumno;
  public $estado_alumno;
  
  function __construct($dni_alumno, $nombre_alumno, $ap_alumno, $am_alumno, $email_alumno, $telefono_alumno, $celular_alumno, $fregistro_alumno, $estado_alumno) {
      $this->dni_alumno = $dni_alumno;
      $this->nombre_alumno = $nombre_alumno;
      $this->ap_alumno = $ap_alumno;
      $this->am_alumno = $am_alumno;
      $this->email_alumno = $email_alumno;
      $this->telefono_alumno = $telefono_alumno;
      $this->celular_alumno = $celular_alumno;
      $this->fregistro_alumno = $fregistro_alumno;
      $this->estado_alumno = $estado_alumno;
  }

  function getDni_alumno() {
      return $this->dni_alumno;
  }

  function getNombre_alumno() {
      return $this->nombre_alumno;
  }

  function getAp_alumno() {
      return $this->ap_alumno;
  }

  function getAm_alumno() {
      return $this->am_alumno;
  }

  function getEmail_alumno() {
      return $this->email_alumno;
  }

  function getTelefono_alumno() {
      return $this->telefono_alumno;
  }

  function getCelular_alumno() {
      return $this->celular_alumno;
  }

  function getFregistro_alumno() {
      return $this->fregistro_alumno;
  }

  function getEstado_alumno() {
      return $this->estado_alumno;
  }

  function setDni_alumno($dni_alumno) {
      $this->dni_alumno = $dni_alumno;
  }

  function setNombre_alumno($nombre_alumno) {
      $this->nombre_alumno = $nombre_alumno;
  }

  function setAp_alumno($ap_alumno) {
      $this->ap_alumno = $ap_alumno;
  }

  function setAm_alumno($am_alumno) {
      $this->am_alumno = $am_alumno;
  }

  function setEmail_alumno($email_alumno) {
      $this->email_alumno = $email_alumno;
  }

  function setTelefono_alumno($telefono_alumno) {
      $this->telefono_alumno = $telefono_alumno;
  }

  function setCelular_alumno($celular_alumno) {
      $this->celular_alumno = $celular_alumno;
  }

  function setFregistro_alumno($fregistro_alumno) {
      $this->fregistro_alumno = $fregistro_alumno;
  }

  function setEstado_alumno($estado_alumno) {
      $this->estado_alumno = $estado_alumno;
  }


  
    
}
