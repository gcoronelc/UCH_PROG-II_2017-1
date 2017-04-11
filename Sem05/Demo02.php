<?php 
	// Creación del Arreglo 
	$lista[] = "Pera"; 
	$lista[] = "Naranja"; 
	$lista[] = "Uva";
	$lista[] = "Manzana"; 

	$lista[50] = "Piña Golden";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejemplo 02</title>
</head>
<body bgcolor="#D2EBF7">
	<h3>Arreglos</h3>
	<?php
		$n = count($lista);
		echo "Tamaño del arreglo $n <br/>";
		for( $j=0; $j < $n; $j++ ) {
			echo( "\$lista[$j] = $lista[$j] <br>" );
		}
	?>
</body>
</html>