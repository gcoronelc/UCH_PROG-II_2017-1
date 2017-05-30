<?php

class ClienteService {
    
    function getClientes($criterio) {
        
        $lista = array();
        $cn = null;
        try {
          $cn = AccesoDB::getConnection();
          $sql = "select
            chr_cliecodigo     codigo,
            vch_cliepaterno    paterno,
            vch_cliematerno    materno,
            vch_clienombre     nombre,
            chr_cliedni        dni,
            vch_clieciudad     ciudad,
            vch_cliedireccion  direccion,
            vch_clietelefono   telefono,
            vch_clieemail      email
            from cliente
            where vch_cliepaterno   like :criterio
            or vch_cliematerno   like :criterio 
            or vch_clienombre    like :criterio ";
          $stm = $cn->prepare($sql);
          $criterio = "%$criterio%";
          $stm->bindParam(':criterio',$criterio,PDO::PARAM_STR);
          $stm->execute();
          $lista = $stm->fetchAll();
          $stm = null;
        } catch (Exception $ex) {
          throw new Exception($ex->getMessage());
        }
        return $lista;        
    }
    
    
}

?>