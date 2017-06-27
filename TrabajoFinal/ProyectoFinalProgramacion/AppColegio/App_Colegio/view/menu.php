<?php 

    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'menu_principal';

    require_once 'pages/header.php';
    
    require_once 'pages/'.$pagina.'.php';
    
    require_once 'pages/footer.php';
?>

