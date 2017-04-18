<?php 

function procPrestamoCuotaVariable
($meses, $capital, $inteMes){

	$repo = array();

	// Proceso

	$cuotaCapital = $capital / $meses;

	for ($mesActual=1; $mesActual <= $meses ; $mesActual++) { 
		// Cuota actual
		$cuotaMes = $mesActual;
		$cuotaInteres = $capital * $inteMes / 100.0;
		$cuotaTotal = $cuotaCapital + $cuotaInteres;
		// Registro actual
		$cuota = array();
		$cuota["mes"] = $cuotaMes;
		$cuota["capital"] = $cuotaCapital;
		$cuota["interes"] = $cuotaInteres;
		$cuota["total"] = $cuotaTotal;
		$repo[] = $cuota;
		// Siguiente cuota
		$capital = $capital - $cuotaCapital;
	}

	return $repo;
}





?>