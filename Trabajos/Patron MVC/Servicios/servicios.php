<?php 

//Servicios
function Logeo($user, $pass){
		$logeo = 0;
			if ($user == 71403098 && $pass == 71403098) {
				echo '<script language="javascript">alert("Usted esta ingresando a la pagina principal \nBienvenido Fernando Alaban Ortiz"); window.location="../View/Cuenta1/index.html"</script>';
			}
			if ($user == 71163991 && $pass == 71163991) {
				echo '<script language="javascript">alert("Usted esta ingresando a la pagina principal \nBienvenido Hugo Obispo Mego"); window.location="../View/Cuenta2/index.html"</script>';
			}else{
			echo '<script language="javascript">alert("Colocar datos correctos"); window.location="../View/form.html"</script>';

			}
			return $logeo;

		}

		 ?>