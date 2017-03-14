<!DOCTYPE html>
<?php
// Dato
$num = $_REQUEST["num"];
// Proceso
$tabla = array();
for ($i = 1; $i <= 12; $i++) {
  $r = $i * $num;
  $row = array($i,"*",$num,"=",$r);
  $tabla[] = $row;
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TABLA</title>
  </head>
  <body>
    <h1>TABLA DEL <?php echo $num; ?></h1>
    <table>
      <?php foreach ($tabla as $row) {?>
      <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
      </tr>
      <?php } ?>
    </table>
    <a href="index.html">Retornar</a>
  </body>
</html>
