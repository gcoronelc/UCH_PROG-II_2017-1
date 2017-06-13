<?php

include_once '../service/CuentaService.php';

$error = FALSE;
$rec = array();
$nroMov = FALSE;
$mensaje = "";

if (isset($_POST["cuenta"])) {
  
  try {
    // Datos
    $rec["cuenta"] = $_POST["cuenta"];
    $rec["empl"] = "0002";
    $rec["importe"] = $_POST["importe"];
    $rec["clave"] = $_POST["clave"];
    // Proceso
    $service = new CuentaService();
    $nroMov = $service->registrarRetiro($rec);
    
  } catch (Exception $ex) {
    $mensaje = $ex->getMessage();
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>PRUEBA</h1>
    <form method="post" action="Prueba02.php">
      <div>
        <label>Cuenta:</label>
        <input type="text" name="cuenta" />
      </div>
      <div>
        <label>Importe:</label>
        <input type="text" name="importe" />
      </div>
      <div>
        <label>Clave:</label>
        <input type="password" name="clave" />
      </div>
      <div>
        <input type="submit" value="Procesar" />
      </div>      
    </form>
    
    <h1>RESULTADO</h1>
    <p>Nro. Mov.: <?php echo $nroMov; ?></p>
    
    <p>Mensaje: <?php echo $mensaje; ?></p>
  </body>
</html>
