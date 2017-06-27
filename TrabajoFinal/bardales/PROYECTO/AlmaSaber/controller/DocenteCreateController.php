<?php

require_once '../dao/DocenteDAO.php';
require_once '../dto/DocenteDTO.php';
date_default_timezone_set("America/Lima");

class DocenteCreateController {
   public $doc;
   function __construct() {
       $this->doc=new DocenteDAO();
   }

   public function creaDocente(DocenteDTO $docente){
       return $this->doc->createDocente($docente);
   }
   
}

$codigo_docente = isset($_POST['txtCodigoDocente']) ? $_POST['txtCodigoDocente'] : "";
$dni_docente = isset($_POST['txtDni']) ? $_POST['txtDni'] : "";
$nombre_docente = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
$ap_docente= isset($_POST['txtApaterno']) ? $_POST['txtApaterno'] : "";
$am_docente = isset($_POST['txtAmaterno']) ? $_POST['txtAmaterno'] : "";
$sexo_docente = isset($_POST['sexo']) ? $_POST['sexo'] : "";
$email_docente = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
$telefono_docente = isset($_POST['txtTelefono']) ? $_POST['txtTelefono'] : "";
$celular_docente = isset($_POST['txtCelular']) ? $_POST['txtCelular'] : "";
$fregistro_docente = date("Y-m-d H:i:s.u");
$estado_docente = 1;

$docente= new DocenteDTO($codigo_docente, $dni_docente, $nombre_docente, $ap_docente, $am_docente, $sexo_docente, $email_docente, $telefono_docente, $celular_docente, $fregistro_docente, $estado_docente);
$newdoc=new DocenteCreateController();
$respuesta=$newdoc->creaDocente($docente);

echo $respuesta;

?>