<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PRESTAMO</title>
  </head>
  <body>
    <h1>PRESTAMO</h1>
    <form method="post" action="../controller/BancoController.php">
      <table>
        <tr>
          <td>Capital:</td>
          <td><input type="text" name="capital"/></td>
        </tr>
        <tr>
          <td>Tasa:</td>
          <td><input type="text" name="tasa"/></td>
        </tr>
        <tr>
          <td>Periodos:</td>
          <td><input type="text" name="periodos"/></td>
        </tr>
      </table>
      <input type="submit" value="Procesar" />
    </form>
    
    <?php if( isset($importe) ){ ?>
    
    <h2>REPORTE</h2>
    <table>
      <tr>
        <td>Capital: </td>
        <td><?php echo $capital; ?></td>
      </tr>
      <tr>
        <td>Tasa: </td>
        <td><?php echo $tasa; ?></td>
      </tr>
      <tr>
        <td>Periodos: </td>
        <td><?php echo $periodos; ?></td>
      </tr>
      <tr>
        <td>Importe: </td>
        <td><?php echo $importe; ?></td>
      </tr>      
    </table>
    <?php } ?>
  </body>
</html>
