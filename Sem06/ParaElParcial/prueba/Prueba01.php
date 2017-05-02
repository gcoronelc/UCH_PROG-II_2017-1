<?php 

include "../service/PrestamoService.php";

// Datos

$meses = 12;
$capital = 1200;
$inteMes = 5;

// Proceso
$repo = procPrestamoCuotaVariable($meses,$capital,$inteMes);

// Reporte

echo "Meses: $meses<br/>";
echo "Capital: $capital<br/>";
echo "Inte. Mes: $inteMes<br/>";

?>

<table>
	<tr>
		<td>MES</td>
		<td>CAPITAL</td>
		<td>INTERES</td>
		<td>TOTAL</td>
	</tr>	

	<?php foreach ($repo as $rec) { ?>
	<tr>
		<td><?php echo $rec["mes"]; ?></td>
		<td><?php echo $rec["capital"]; ?></td>
		<td><?php echo $rec["interes"]; ?></td>
		<td><?php echo $rec["total"]; ?></td>
	</tr>	
	<?php } ?>


</table>
