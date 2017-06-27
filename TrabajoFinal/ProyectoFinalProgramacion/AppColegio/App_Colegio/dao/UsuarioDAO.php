<?php

@session_start();
require_once '../databases/Conexion.php';

class UsuarioDAO {

    function __construct() {
        
    }

    public function createUsuario(UsuarioDTO $usuario) {
        $rpt = 2;
        try {

            $usu = $this->findInfoUsuario($usuario->getUsu_usuario());

            if ($usu == null) {
                $conexion = new Conexion();
                $cn = $conexion->getConexion();
                $sql = "INSERT INTO col_usuario VALUES(null,:col_TipoUsuario_id_tipousuario,:nombre_usuario,:ap_usuario,:am_usuario,:sexo_usuario,:email_usuario,:usu_usuario,:password_usuario,:fregistro_usuario,:estado_usuario)";

                $statement = $cn->prepare($sql);

                $statement->bindParam(":col_TipoUsuario_id_tipousuario", $usuario->getCol_TipoUsuario_id_tipousuario());
                $statement->bindParam(":nombre_usuario", $usuario->getNombre_usuario());
                $statement->bindParam(":ap_usuario", $usuario->getAp_usuario());
                $statement->bindParam(":am_usuario", $usuario->getAm_usuario());
                $statement->bindParam(":sexo_usuario", $usuario->getSexo_usuario());
                $statement->bindParam(":email_usuario", $usuario->getEmail_usuario());
                $statement->bindParam(":usu_usuario", $usuario->getUsu_usuario());
                $statement->bindParam(":password_usuario", $usuario->getPassword_usuario());
                $statement->bindParam(":fregistro_usuario", $usuario->getFregistro_usuario());
                $statement->bindParam(":estado_usuario", $usuario->getEstado_usuario());

                if ($statement->execute()) {
                    $rpt = 1;
                } else {
                    $rpt = 2;
                }
                $cn = null;
            } else {
                $rpt = 4592;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $rpt;
    }

    public function readAllUsuario() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT "
                    . "col_usuario.col_TipoUsuario_id_tipousuario,"
                    . "col_usuario.nombre_usuario,"
                    . "col_usuario.ap_usuario,"
                    . "col_usuario.am_usuario,"
                    . "col_usuario.sexo_usuario,"
                    . "col_usuario.email_usuario,"
                    . "col_usuario.usu_usuario,"
                    . "col_usuario.password_usuario,"
                    . "col_usuario.fregistro_usuario,"
                    . "col_usuario.estado_usuario,"
                    . "col_tipousuario.id_tipousuario,"
                    . "col_tipousuario.descripcion_tu"
                    . " FROM col_usuario INNER JOIN col_tipousuario"
                    . " ON col_usuario.col_TipoUsuario_id_tipousuario=col_tipousuario.id_tipousuario ORDER BY fregistro_usuario";
            $statement = $cn->prepare($sql);
            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $arreglo;
    }

    public function updateUsuario(UsuarioDTO $usuario) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "UPDATE col_usuario SET "
                    . "col_TipoUsuario_id_tipousuario=:col_TipoUsuario_id_tipousuario,"
                    . "nombre_usuario=:nombre_usuario,"
                    . "ap_usuario=:ap_usuario,"
                    . "am_usuario=:am_usuario,"
                    . "sexo_usuario=:sexo_usuario,"
                    . "email_usuario=:email_usuario,"
                    . "password_usuario=:password_usuario,"
                    . "estado_usuario=:estado_usuario"
                    . " WHERE usu_usuario=:usu_usuario";

            $statement = $cn->prepare($sql);
            $statement->bindParam(":col_TipoUsuario_id_tipousuario", $usuario->getCol_TipoUsuario_id_tipousuario());
            $statement->bindParam(":nombre_usuario", $usuario->getNombre_usuario());
            $statement->bindParam(":ap_usuario", $usuario->getAp_usuario());
            $statement->bindParam(":am_usuario", $usuario->getAm_usuario());
            $statement->bindParam(":sexo_usuario", $usuario->getSexo_usuario());
            $statement->bindParam(":email_usuario", $usuario->getEmail_usuario());
            $statement->bindParam(":password_usuario", $usuario->getPassword_usuario());
            $statement->bindParam(":estado_usuario", $usuario->getEstado_usuario());
            $statement->bindParam(":usu_usuario", $usuario->getUsu_usuario());

            if ($statement->execute()) {
                $rpt = 1;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $rpt;
    }

    public function deleteUsuario($usu_usuario) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "DELETE FROM col_usuario WHERE usu_usuario=:usu_usuario";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":usu_usuario", $usu_usuario);
            if ($statement->execute()) {
                $rpt = 1;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $rpt;
    }

    public function findUsuario($usu_usuario, $pass) {
        $rpt = 2;
		return "$usu_usuario-$pass";
			
        $password_usuario = str_replace(' ', '+', base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5('hola2016'), $pass, MCRYPT_MODE_CBC, md5(md5('hola2016')))));
        try {
            $arreglo = null;
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT usu_usuario, password_usuario FROM col_usuario WHERE usu_usuario=:usu_usuario AND password_usuario=:password_usuario";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":usu_usuario", $usu_usuario);
            $statement->bindParam(":password_usuario", $pass);
            echo("$usu_usuario-$pass");
			die ();
			if (!$statement) {
                $rpt = 4; //error en buscar usuario
            } else {
                if ($statement->execute()) {
                    if ($resultado = $statement->fetch()) {
                        $arreglo[] = $resultado;
                    }
                    if (count($arreglo) > 0) {
                        date_default_timezone_set("America/Lima");
                        $_SESSION['usu_usuario'] = $usu_usuario;
                        $_SESSION['inicio_session'] = date("Y-m-d H:i:s.u");
                        //dar un limite de tiempo en la session de cada usuario
                        // $_SESSION['start'] = time();
                        // $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
                        $rpt = 1; //busqueda exitosa
                    } else {

                        $rpt = 2; //no hay registro
                    }
                } else {
                    $rpt = 3; // erroe en la consulta execute
                }
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        return $rpt;
    }

    public function findInfoUsuario($usu_usuario) {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT "
                    . "col_usuario.col_TipoUsuario_id_tipousuario,"
                    . "col_usuario.nombre_usuario,"
                    . "col_usuario.ap_usuario,"
                    . "col_usuario.am_usuario,"
                    . "col_usuario.sexo_usuario,"
                    . "col_usuario.email_usuario,"
                    . "col_usuario.usu_usuario,"
                    . "col_usuario.password_usuario,"
                    . "col_usuario.fregistro_usuario,"
                    . "col_usuario.estado_usuario"
                    . " FROM col_usuario WHERE usu_usuario=:usu_usuario";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":usu_usuario", $usu_usuario);
            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
            } else {
                $arreglo = null;
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $arreglo;
    }

}

?>
