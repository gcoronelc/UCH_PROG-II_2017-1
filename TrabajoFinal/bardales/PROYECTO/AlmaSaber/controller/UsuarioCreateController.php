<?php

require_once '../dao/UsuarioDAO.php';
require_once '../dto/UsuarioDTO.php';

date_default_timezone_set("America/Lima");

class UsuarioCreateController {

    public $usu;

    function __construct() {
        $this->usu = new UsuarioDAO();
    }

    public function crearUsuario(UsuarioDTO $usuario) {
        return $this->usu->createUsuario($usuario);
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
$fregistro_usuario = date("Y-m-d H:i:s.u");
$estado_usuario = 1;


if ($password_usuario1 == $password_usuario2) {
    if (strlen($password_usuario1) >= 8 && strlen($password_usuario2) >= 8) {
        if (preg_match('`[0-9]`', $password_usuario1)) {
            if (preg_match('`[a-z]`', $password_usuario1)) {
                $password_usuario = str_replace(' ', '+', base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5('hola2016'), $password_usuario1, MCRYPT_MODE_CBC, md5(md5('hola2016'))))); //aqui encriptamos la contraseña
//                $usuario = new UsuarioDTO($col_TipoUsuario_id_tipousuario, $nombre_usuario, $ap_usuario, $am_usuario, $sexo_usuario, $email_usuario, $usu_usuario, $password_usuario, $fregistro_usuario, $estado_usuario);
                $usuario = new UsuarioDTO();
                $usuario->setCol_TipoUsuario_id_tipousuario($col_TipoUsuario_id_tipousuario);
                $usuario->setNombre_usuario($nombre_usuario);
                $usuario->setAp_usuario($ap_usuario);
                $usuario->setAm_usuario($am_usuario);
                $usuario->setSexo_usuario($sexo_usuario);
                $usuario->setEmail_usuario($email_usuario);
                $usuario->setUsu_usuario($usu_usuario);
                $usuario->setPassword_usuario($password_usuario);
                $usuario->setFregistro_usuario($fregistro_usuario);
                $usuario->setEstado_usuario($estado_usuario);
                $newuser = new UsuarioCreateController();
                $rs = $newuser->crearUsuario($usuario);
                echo $rs;
            } else {
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

