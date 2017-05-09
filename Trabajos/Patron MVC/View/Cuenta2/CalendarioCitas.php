<?php
	require_once 'php/Registro.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calendario de citas</title>
</head>
<body>
	<div>
		<?php
			$registro = new Registro();
			$registro->mostrar();
		?>
	</div>
</body>
</html>