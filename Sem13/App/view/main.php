<?php


if( ! isset($_SESSION["usuario"]) ){
    echo "no hay session.";
    die();
}

?>
<?php include '../menu/variables.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>PAGINA PRINCIPAL</h1>
        <?php include '../menu/menu.php'; ?>
    </body>
</html>
