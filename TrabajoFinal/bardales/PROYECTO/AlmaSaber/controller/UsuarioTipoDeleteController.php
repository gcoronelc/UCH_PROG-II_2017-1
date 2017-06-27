<?php

require_once '../dao/UsuarioTipoDAO.php';
require_once '../dto/UsuarioTipoDTO.php';

class UsuarioTipoDeleteController {

    public $tusu;

    function __construct() {
        $this->tusu = new UsuarioTipoDAO();
    }
    
    public function eliminarTipoUsuario($descripcion_tu) {
        return $this->tusu->deleteTUsuario($descripcion_tu);
    }
    
}

$usu=$_POST['txtDescripcionTU'];

$usuario=new UsuarioTipoDeleteController();
$respuesta=$usuario->eliminarTipoUsuario('Reportes');

echo $respuesta;

?>