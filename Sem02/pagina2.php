<!DOCTYPE html>
<?php 
// Datos
$n = 10;
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>SERIE</h1>
    <?php
      $a = 0;
      $b = 1;
    ?>
    <p>1.- 0</p>
    <p>2.- 1</p>
    <?php for( $i = 3; $i <= $n; $i++ ){ 
      $c = $a + $b;
    ?>
    <p><?php echo $i;?>.- <?php echo $c; ?></p>
    
    <?php
      $a = $b;
      $b = $c;
    ?>
    <?php } ?>
  </body>
</html>
