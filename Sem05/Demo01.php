<?php 
// Creación del arreglo 
$lista[] = "Impresora"; 
$lista[] = 100; 
$lista[] = 165.79; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>Ejemplo 01</title>
</head>
<body bgcolor="#D2EBF7"> 
	<h3>Arreglos</h3> 
	<?php 
		echo( "\$lista[0] = " . $lista[0] . "<br>" );
		echo( "\$lista[1] = " . $lista[1] . "<br>" ); 
		echo( "\$lista[2] = " . $lista[2] . "<br>" );
		echo( "<br>" ); 
		echo( "\$lista[0] es de tipo " . gettype($lista[0]) . "<br>" ); 
		echo( "\$lista[1] es de tipo " . gettype($lista[1]) . "<br>" ); 
		echo( "\$lista[2] es de tipo " . gettype($lista[2]) . "<br>" ); 
	?>
</body>
</html>