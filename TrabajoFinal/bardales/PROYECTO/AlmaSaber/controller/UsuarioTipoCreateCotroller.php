<?php

require_once '../dao/UsuarioTipoDAO.php';
require_once '../dto/UsuarioTipoDTO.php';

class UsuarioTipoCreateCotroller {

    public $tusu;

    function __construct() {
        $this->tusu = new UsuarioTipoDAO();
    }

    public function crearTipoUsuario(UsuarioTipoDTO $tusu) {
        return $this->tusu->createTUsuario($tusu);
    }

}

$descripcion_tu = isset($_POST['txtTipoUsuario']) ? $_POST['txtTipoUsuario'] : "";
$seguridad_tu = isset($_POST['seguridad']) ? $_POST['seguridad'] : 0;
$planificacion_tu = isset($_POST['planificacion']) ? $_POST['planificacion'] : 0;
$matricula_tu = isset($_POST['matriula']) ? $_POST['matriula'] : 0;
$reportes_tu = isset($_POST['reporte']) ? $_POST['reporte'] : 0;


$tipousu = new UsuarioTipoDTO($descripcion_tu, $seguridad_tu, $planificacion_tu, $matricula_tu, $reportes_tu);
$tipo = new UsuarioTipoCreateCotroller();
$rpt = $tipo->crearTipoUsuario($tipousu);
echo $rpt;
?>
