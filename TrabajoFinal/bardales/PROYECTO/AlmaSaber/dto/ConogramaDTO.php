<?php

class ConogramaDTO {
  public $col_Matricula_id_matricula;
  public $monto_cronograma;
  public $fvencimiento_cronograma;
  
  function __construct($col_Matricula_id_matricula, $monto_cronograma, $fvencimiento_cronograma) {
      $this->col_Matricula_id_matricula = $col_Matricula_id_matricula;
      $this->monto_cronograma = $monto_cronograma;
      $this->fvencimiento_cronograma = $fvencimiento_cronograma;
  }
  
  function getCol_Matricula_id_matricula() {
      return $this->col_Matricula_id_matricula;
  }

  function getMonto_cronograma() {
      return $this->monto_cronograma;
  }

  function getFvencimiento_cronograma() {
      return $this->fvencimiento_cronograma;
  }

  function setCol_Matricula_id_matricula($col_Matricula_id_matricula) {
      $this->col_Matricula_id_matricula = $col_Matricula_id_matricula;
  }

  function setMonto_cronograma($monto_cronograma) {
      $this->monto_cronograma = $monto_cronograma;
  }

  function setFvencimiento_cronograma($fvencimiento_cronograma) {
      $this->fvencimiento_cronograma = $fvencimiento_cronograma;
  }



}
