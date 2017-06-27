<?php

@session_start();
require_once '../databases/Conexion.php';

class DocenteDAO {

    function __construct() {
        
    }

    public function createDocente(DocenteDTO $docente) {
        $rpt = 2;
		$codigo_docente = $docente->getCodigo_docente();
		$dni_docente = $docente->getDni_docente();
		$nombre_docente = $docente->getNombre_docente();
        $ap_docente = $docente->getAp_docente();
        $am_docente = $docente->getAm_docente();
        $sexo_docente = $docente->getSexo_docente();
        $email_docente = $docente->getEmail_docente();
        $telefono_docente = $docente->getTelefono_docente();
        $celular_docente = $docente->getCelular_docente();
        $fregistro_docente = $docente->getFregistro_docente();
        $estado_docente = $docente->getEstado_docente();
		
        try {

            $doc = $this->findDocente($docente->getCodigo_docente());
            $dni = $this->findDocenteDNI($docente->getDni_docente());
            if ($doc == null) {
                if ($dni == null) {
                    $conexion = new Conexion();
                    $cn = $conexion->getConexion();
                    $sql = "INSERT INTO col_docente VALUES(null,:codigo_docente,:dni_docente,:nombre_docente,:ap_docente,:am_docente,:sexo_docente,:email_docente,:telefono_docente,:celular_docente,:fregistro_docente,:estado_docente)";

                    $statement = $cn->prepare($sql);

                    $statement->bindParam(":codigo_docente", $codigo_docente);
                    $statement->bindParam(":dni_docente", $dni_docente);
                    $statement->bindParam(":nombre_docente", $nombre_docente);
                    $statement->bindParam(":ap_docente", $ap_docente);
                    $statement->bindParam(":am_docente", $am_docente);
                    $statement->bindParam(":sexo_docente", $sexo_docente);
                    $statement->bindParam(":email_docente", $email_docente);
                    $statement->bindParam(":telefono_docente", $telefono_docente);
                    $statement->bindParam(":celular_docente", $celular_docente);
                    $statement->bindParam(":fregistro_docente", $fregistro_docente);
                    $statement->bindParam(":estado_docente", $estado_docente);
                    if ($statement->execute()) {
                        $rpt = 1;
                    }
                    $cn = null;
                } else {
                    $rpt = 4591;
                }
            } else {
                $rpt = 4592;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $rpt;
		/*return json_encode($docente);*/
    }

    public function readAllDocente() {
        $arreglo = null;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT "
                    . "id_docente,"
                    . "codigo_docente,"
                    . "dni_docente,"
                    . "nombre_docente,"
                    . "ap_docente,"
                    . "am_docente,"
                    . "sexo_docente,"
                    . "email_docente,"
                    . "telefono_docente,"
                    . "celular_docente,"
                    . "fregistro_docente,"
                    . "estado_docente"
                    . " FROM col_docente ORDER BY fregistro_docente";
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

    public function updateDocente(DocenteDTO $docente) {
        $rpt = 2;
        $dni_docente = $docente->getDni_docente();
        $nombre_docente = $docente->getNombre_docente();
        $ap_docente = $docente->getAp_docente();
        $am_docente = $docente->getAm_docente();
        $sexo_docente = $docente->getSexo_docente();
        $email_docente = $docente->getEmail_docente();
        $telefono_docente = $docente->getTelefono_docente();
        $celular_docente = $docente->getCelular_docente();
        $estado_docente = $docente->getEstado_docente();

        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "UPDATE col_docente SET dni_docente=:dni_docente,nombre_docente=:nombre_docente,ap_docente=:ap_docente,am_docente=:am_docente,sexo_docente=:sexo_docente,email_docente=:email_docente,telefono_docente=:telefono_docente,celular_docente=:celular_docente,estado_docente=:estado_docente WHERE codigo_docente=:codigo_docente";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":codigo_docente", $codigo_docente);
            $statement->bindParam(":dni_docente", $dni_docente);
            $statement->bindParam(":nombre_docente", $nombre_docente);
            $statement->bindParam(":ap_docente", $ap_docente);
            $statement->bindParam(":am_docente", $am_docente);
            $statement->bindParam(":sexo_docente", $sexo_docente);
            $statement->bindParam(":email_docente", $email_docente);
            $statement->bindParam(":telefono_docente", $telefono_docente);
            $statement->bindParam(":celular_docente", $celular_docente);
            $statement->bindParam(":estado_docente", $estado_docente);

            if ($statement->execute()) {
                $rpt = 1;
            }
        } catch (Exception $ex) {
            $rpt = $ex->getMessage();
        }
        return $rpt;
    }

    public function deleteDocente($codigo_docente) {
        $rpt = 2;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "DELETE FROM col_docente WHERE codigo_docente=:codigo_docente";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":codigo_docente", $codigo_docente);
            if ($statement->execute()) {
                $rpt = 1;
            }
        } catch (Exception $ex) {
            $rpt = $ex->getMessage();
        }
        return $rpt;
    }

   public function findDocente($codigo_docente) {
        $arreglo = null;
        try {

            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT codigo_docente FROM col_docente WHERE codigo_docente=:codigo_docente";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":codigo_docente", $codigo_docente);
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

    public function findDocenteDNI($dni_docente) {
        $arreglo = null;
        try {

            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT dni_docente FROM col_docente WHERE dni_docente=:dni_docente";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":dni_docente", $dni_docente);
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


    public function dceM() {
        $arreglo = null;
        $cant = 0;
        $sexo = "M";
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT sexo_docente FROM col_docente WHERE sexo_docente=:sexo";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":sexo", $sexo);

            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
                $cant = count($arreglo);
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $cant;
    }

    public function dceF() {
        $arreglo = null;
        $cant = 0;
        $sexo = "F";
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT sexo_docente FROM col_docente WHERE sexo_docente=:sexo";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":sexo", $sexo);

            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
                $cant = count($arreglo);
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $cant;
    }

    public function dceDesactivo() {
        $arreglo = null;
        $cant = 0;
        $estado = 0;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT estado_docente FROM col_docente WHERE estado_docente=:estado";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":estado", $estado);

            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
                $cant = count($arreglo);
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $cant;
    }

    public function dceActivo() {
        $arreglo = null;
        $cant = 0;
        $estado = 1;
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT estado_docente FROM col_docente WHERE estado_docente=:estado";
            $statement = $cn->prepare($sql);
            $statement->bindParam(":estado", $estado);

            if ($statement->execute()) {
                while ($resultado = $statement->fetch()) {
                    $arreglo[] = $resultado;
                }
                $cant = count($arreglo);
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $cant;
    }

    public function getNewCodigo()
    {
        $codigo = '';
        try {
            $conexion = new Conexion();
            $cn = $conexion->getConexion();
            $sql = "SELECT MAX(codigo_docente) as codigo FROM col_docente";
            $statement = $cn->prepare($sql);

            if ($statement->execute()) {
                if ($resultado = $statement->fetch()) {
                    if(empty($resultado['codigo']))
                        $codigo = 'DOC-1';
                    else
                    {
                        $doc_n = explode('-', $resultado['codigo']);
                        $codigo = $doc_n[0].'-'.($doc_n[1] + 1);
                    }
                }
                else
                    $codigo = 'DOC-1';
            }
            $cn = null;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $codigo;
    }

}
