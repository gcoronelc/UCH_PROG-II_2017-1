<?php

include_once '../db/AccesoDB.php';

class CuentaService {

  /**
   * Estructura del registro
   *  $rec["cuenta"] -> Cuenta a cargar el retiro
   *  $rec["empl"] -> Código del empleado 
   *  $rec["importe"] -> Importe del retiro 
   *  $rec["clave"] -> Clave de la cuenta 
   * @param type $datos Registro de datos
   */
  function registrarRetiro($rec) {
    $pdo = null;
    $nroMov = 0;
    try {
      // Objeto Connection
      $pdo = AccesoDB::getConnection();
      // Iniciando la Tx
      $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
      $pdo->beginTransaction();
      // Leer saldo
      $query = "select dec_cuensaldo saldo from cuenta "
              . "where chr_cuencodigo = ? "
              . "for update ";
      $stm = $pdo->prepare($query);
      $stm->execute(array($rec["cuenta"]));
      if ($stm->rowCount() == 0) {
        throw new PDOException("Cuenta no existe");
      }
      $row = $stm->fetch();
      $saldo = $row['saldo'];
      // Retardo
      sleep(3);
      // Validar el saldo
      if($saldo < $rec["importe"]){
        throw new Exception("No cuenta con saldo suficiente.");
      }
      // Actualizar el saldo
      $saldo = $saldo - $rec["importe"];
      $query = "update cuenta set dec_cuensaldo = ? "
              . "where chr_cuencodigo = ? ";
      $stm = $pdo->prepare($query);
      $stm->bindParam(1,$saldo); 
      $stm->bindParam(2,$rec["cuenta"]);
      $stm->execute();
      // Actualizar el contador
      $query = "update cuenta "
              . "set int_cuencontmov = int_cuencontmov + 1  "
              . "where chr_cuencodigo = ? ";
      $stm = $pdo->prepare($query);
      $stm->bindParam(1,$rec["cuenta"]);
      $stm->execute();
      // Leer el contador
      $query = "select int_cuencontmov cont from cuenta "
              . "where chr_cuencodigo = ? ";
      $stm = $pdo->prepare($query);
      $stm->execute(array($rec["cuenta"]));
      if ($stm->rowCount() == 0) {
        throw new PDOException("Cuenta no existe");
      }
      $row = $stm->fetch();
      $nroMov = $row['cont'];
      // Insertar el movimiento
      $query = "insert into movimiento(chr_cuencodigo,
        int_movinumero,dtt_movifecha,chr_emplcodigo,
        chr_tipocodigo,dec_moviimporte) 
        values(?,?,SYSDATE(),?,'004',?)";
      $stm = $pdo->prepare($query);
      $stm->bindParam(1,$rec["cuenta"]);
      $stm->bindParam(2,$nroMov);
      $stm->bindParam(3,$rec["empl"]);
      $stm->bindParam(4,$rec["importe"]);
      $stm->execute();
      // Confirmar Transacción 
      $pdo->commit();
    } catch (Exception $e) {
        print_r( $e ) ;
      try {
        $pdo->rollBack(); // Cancela la transacción
      } catch (Exception $exc) {        
      }
      throw $e;
    }
    return $nroMov;
  }

}
