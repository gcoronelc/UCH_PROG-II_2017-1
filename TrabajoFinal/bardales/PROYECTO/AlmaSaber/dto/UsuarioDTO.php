<?php

class UsuarioDTO {

    public $col_TipoUsuario_id_tipousuario;
    public $nombre_usuario;
    public $ap_usuario;
    public $am_usuario;
    public $sexo_usuario;
    public $email_usuario;
    public $usu_usuario;
    public $password_usuario;
    public $fregistro_usuario;
    public $estado_usuario;

    function __construct() {
        $args = func_get_args();
        $nargs = func_num_args();
        switch ($nargs) {
            case 1:
                self::__construct1();
                break;
            case 2:
                self::__construct2($args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6], $args[7], $args[8], $args[9]);
                break;
        }
    }

    function __construct1() {
        
    }

    function __construct2($col_TipoUsuario_id_tipousuario, $nombre_usuario, $ap_usuario, $am_usuario, $sexo_usuario, $email_usuario, $usu_usuario, $password_usuario, $fregistro_usuario, $estado_usuario) {
        $this->col_TipoUsuario_id_tipousuario = $col_TipoUsuario_id_tipousuario;
        $this->nombre_usuario = $nombre_usuario;
        $this->ap_usuario = $ap_usuario;
        $this->am_usuario = $am_usuario;
        $this->sexo_usuario = $sexo_usuario;
        $this->email_usuario = $email_usuario;
        $this->usu_usuario = $usu_usuario;
        $this->password_usuario = $password_usuario;
        $this->fregistro_usuario = $fregistro_usuario;
        $this->estado_usuario = $estado_usuario;
    }

    function getCol_TipoUsuario_id_tipousuario() {
        return $this->col_TipoUsuario_id_tipousuario;
    }

    function getNombre_usuario() {
        return $this->nombre_usuario;
    }

    function getAp_usuario() {
        return $this->ap_usuario;
    }

    function getAm_usuario() {
        return $this->am_usuario;
    }

    function getSexo_usuario() {
        return $this->sexo_usuario;
    }

    function getEmail_usuario() {
        return $this->email_usuario;
    }

    function getUsu_usuario() {
        return $this->usu_usuario;
    }

    function getPassword_usuario() {
        return $this->password_usuario;
    }

    function getFregistro_usuario() {
        return $this->fregistro_usuario;
    }

    function getEstado_usuario() {
        return $this->estado_usuario;
    }

    function setCol_TipoUsuario_id_tipousuario($col_TipoUsuario_id_tipousuario) {
        $this->col_TipoUsuario_id_tipousuario = $col_TipoUsuario_id_tipousuario;
    }

    function setNombre_usuario($nombre_usuario) {
        $this->nombre_usuario = $nombre_usuario;
    }

    function setAp_usuario($ap_usuario) {
        $this->ap_usuario = $ap_usuario;
    }

    function setAm_usuario($am_usuario) {
        $this->am_usuario = $am_usuario;
    }

    function setSexo_usuario($sexo_usuario) {
        $this->sexo_usuario = $sexo_usuario;
    }

    function setEmail_usuario($email_usuario) {
        $this->email_usuario = $email_usuario;
    }

    function setUsu_usuario($usu_usuario) {
        $this->usu_usuario = $usu_usuario;
    }

    function setPassword_usuario($password_usuario) {
        $this->password_usuario = $password_usuario;
    }

    function setFregistro_usuario($fregistro_usuario) {
        $this->fregistro_usuario = $fregistro_usuario;
    }

    function setEstado_usuario($estado_usuario) {
        $this->estado_usuario = $estado_usuario;
    }

}

?>
