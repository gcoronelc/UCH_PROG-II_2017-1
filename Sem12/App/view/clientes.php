<?php
    include '../menu/variables.php';
    $menuClientes = "menuItemActivo";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>CONSULTAR CLIENTES</h1>
        <?php include '../menu/menu.php'; ?>
        <div>
            <form method="post" action="../controller/ConClientes.php">
                <table>
                    <tr>
                        <td>
                            <label>Paterno, Materno o Nombre</label><br/>
                            <input type="text" name="criterio" size="40" />
                        </td>
                        <td>
                            <input class="btnMain" type="submit" value="Procesar" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        
        <?php if( isset($lista)) { ?>
        <div>
            <h2>REPORTE</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>PATERNO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $r) {?>
                    <tr>
                        <td><?php echo $r["codigo"]  ?> </td>
                        <td><?php echo $r["paterno"] ?> </td>
                    </tr>  
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } ?>
        
    </body>
</html>
