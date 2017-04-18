<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.caja{
			margin: 10px;
			padding: 10px 20px;
			display: inline-block;
			background-color: #009099;
			color: #00f1ff;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<h1>DEMO DE SESIONES</h1>
	<div>
		<a class="caja" href="agregar.php" target="panel">Agregar Ciudad</a>
		<a class="caja" href="listado.php" target="panel">Listar Ciudades</a>
		<a class="caja" href="../controller/ctlLimpiar.php" target="panel">Limpiar Lista</a>
	</div>
	<iframe name="panel" width="800px" height="300px"></iframe>
</body>
</html>