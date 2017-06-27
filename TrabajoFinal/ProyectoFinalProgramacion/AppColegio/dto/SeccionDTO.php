<?php

class SeccionDTO {
  public $nombre_seccion;
  
  function __construct($nombre_seccion) {
      $this->nombre_seccion = $nombre_seccion;
  }


  function getNombre_seccion() {
      return $this->nombre_seccion;
  }

  function setNombre_seccion($nombre_seccion) {
      $this->nombre_seccion = $nombre_seccion;
  }


  

    
    
}
