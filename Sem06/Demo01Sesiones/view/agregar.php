<?php
	if(!isset($mensaje)){
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>AGREGAR CIUDAD</h2>
	<div>
		<form method="post" action="../controller/ctlAgregar.php">
			Nombre de ciudad:
			<input type="text" name="ciudad"/>
			<input type="submit" value="Procesar">
		</form>
	</div>

	<?php if(isset($mensaje)) {?>
	<div style="color:blue; margin: 10px;">
		<?php echo $mensaje; ?>
	</div>
	<?php } ?>
</body>
</html>