<?php

require_once '../dao/DocenteDAO.php';
require_once '../dto/DocenteDTO.php';
date_default_timezone_set("America/Lima");

class DocenteUpdateController {

    public $doc;

    function __construct() {
        $this->doc = new DocenteDAO();
    }
    
    public function modificar(DocenteDTO $docente){
        return $this->doc->updateDocente($docente);
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
$fregistro_docente = isset($_POST['txtFregistro']) ? $_POST['txtFregistro'] : "";
$estado_docente = isset($_POST['txtEstado']) ? $_POST['txtEstado'] : 0;

$docente= new DocenteDTO();
$docente->setCodigo_docente($codigo_docente);
$docente->setDni_docente($dni_docente);
$docente->setNombre_docente($nombre_docente);
$docente->setAp_docente($ap_docente);
$docente->setAm_docente($am_docente);
$docente->setSexo_docente($sexo_docente);
$docente->setEmail_docente($email_docente);
$docente->setTelefono_docente($telefono_docente);
$docente->setCelular_docente($celular_docente);
$docente->setFregistro_docente($fregistro_docente);
$docente->setEstado_docente($estado_docente);

$actulizar=new DocenteUpdateController();
$respuesta=$actulizar->modificar($docente);
echo $respuesta;

?>
