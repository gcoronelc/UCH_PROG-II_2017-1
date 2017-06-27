<?php

require_once '../dao/UsuarioDAO.php';
require_once '../dto/UsuarioDTO.php';

class UsuarioUpdateController {

    public $usu;

    function __construct() {
        $this->usu = new UsuarioDAO();
    }

    public function actualizar(UsuarioDTO $usuario) {
        return $this->usu->updateUsuario($usuario);
    }

}

$col_TipoUsuario_id_tipousuario = isset($_POST['txtTipoUsuario']) ? $_POST['txtTipoUsuario'] : 0;
$nombre_usuario = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
$ap_usuario = isset($_POST['txtAPaterno']) ? $_POST['txtAPaterno'] : "";
$am_usuario = isset($_POST['txtAMaterno']) ? $_POST['txtAMaterno'] : "";
$sexo_usuario = isset($_POST['sexo']) ? $_POST['sexo'] : "";
$email_usuario = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
$usu_usuario = isset($_POST['txtUsuario']) ? $_POST['txtUsuario'] : "";
$password_usuario1 = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : "";
$password_usuario2 = isset($_POST['txtPassword2']) ? $_POST['txtPassword2'] : "";
$fregistro_usuario = isset($_POST['txtFregistro']) ? $_POST['txtFregistro'] : "";
$estado_usuario = isset($_POST['txtEstado']) ? $_POST['txtEstado'] : 0;


if ($password_usuario1 == $password_usuario2) {
    if (strlen($password_usuario1) >= 8 && strlen($password_usuario2) >= 8) {
        if (preg_match('`[0-9]`', $password_usuario1)) {
            if (preg_match('`[a-z]`', $password_usuario1)) {
                $password_usuario = str_replace(' ', '+', base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5('hola2016'), $password_usuario1, MCRYPT_MODE_CBC, md5(md5('hola2016'))))); //aqui encriptamos la contraseña
                $usuario = new UsuarioDTO($col_TipoUsuario_id_tipousuario, $nombre_usuario, $ap_usuario, $am_usuario, $sexo_usuario, $email_usuario, $usu_usuario, $password_usuario, $fregistro_usuario, $estado_usuario);
                $upduser = new UsuarioUpdateController();
                $rs = $upduser->actualizar($usuario);
                echo $rs;
            }else{
                echo 18;
            }
        } else {
            echo 17;
        }
    } else {
        echo 16;
    }
} else {
    echo 15;
}







?>