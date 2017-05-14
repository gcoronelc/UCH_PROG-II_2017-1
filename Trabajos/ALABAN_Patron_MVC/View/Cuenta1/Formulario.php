<?php
require_once('php/Registro.php');
$Registro= new Registro(); 
if($_POST){
	$Registro->guardar($_POST["nombreCompleto"], $_POST["Email"], $_POST["Telefono"], $_POST["Celular"], $_POST["Direccion"], $_POST["Ciudad"], $_POST["fecha"], $_POST["hour"], $_POST["Detalles"]);
	//header("Location: Citas.php");
	/*$Registro->NombrePaciente=$_POST['nombreCompleto'];
	$Registro->Email=$_POST['Email'];
	$Registro->Telefono=$_POST['Telefono'];
	$Registro->Celular=$_POST['Celular'];
	$Registro->Direccion=$_POST['Direccion'];
	$Registro->Ciudad=$_POST['Ciudad'];
	$Registro->Fecha=$_POST['fecha'];
	$Registro->Hora=$_POST['hour'];
	$Registro->DetalleCita=$_POST['Detalles'];
	$Registro->guardar();
	header("location:index.html");*/
}	
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="#" />
<meta name="keywords" content="#" />
<meta name="author" content="#" />
<link rel="stylesheet" type="text/css" href="doctors_office.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/date.css">
 	
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+2M 10D" });
  } );
 </script>

 <script type="text/javascript" src="js/jquery.timePicker.js"></script>
 <script type="text/javascript">
 jQuery(function() {
    $("#time1").timePicker();
</script>
<title>Formulario</title>
</head>

<body>
<div id="banner">
<div class="top_links clearfix" id="topnav">
<ul>
<li><a href="#">ID</a></li>
<li><a href="#">71403098</a></li>
<li><a href="#">Username</a></li>
<li><a href="#">Fernando Alaban Ortiz</a></li>
</ul>
</div>
<img alt="pumpkin" src="img/header_logo.jpg" width="100" height="100" style="margin-left: 20px" />
<div class="page_title"><span id="page_title">CENTRO DE ATENCION DE SALUD SERGIO BERNALES</span><br />
Sistema avanzado de citas via web</div>
</div>
<div class="leftcontent" id="nav"> <img alt="bg image" src="img/left_bg_top.gif" />
<ul>
<li><a href="index.html">Inicio</a></li>
<li><a href="Formulario.php">Solicitar Cita</a></li>
<li><a href="http://www.hnseb.gob.pe/directorioinst.html">Lista de Medicos</a></li>
<li><a href="Citas.php">Calendario de Citas</a></li>
<li><a href="Ubicanos.html">Ubicanos</a></li>
<li><a href="Contacto.php">Contactanos</a></li>
</ul>
<div class="left_news">
<p>&nbsp;</p>
<p><span class="news_title">Noticias</span><br />
Ninguna Nueva noticia por el momento</p>
<p><span class="news_title">Cambios realizados a la pagina</span><br />
Ninguno.</p>
</div>
</div>
<div id="centercontent">
<p><H1 class="Titulos">Registro de cita</H1></p>
<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
<script type="text/javascript">
function letras(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[A-Za-z\s]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
<form method="POST">
	<table align="center">
		<tr>
			<td><label>Nombre del Paciente: <font color="red">(*)</font> </label></td>
			<td><input type="text" name="nombreCompleto" placeholder="Nombre y Apellidos completos" maxlength="50"></td>
		</tr>
		<tr>
			<td><label>Email: <font color="red">(*)</font></label></td>
			<td><input type="text" name="Email" placeholder="Ejemplo: paciente@mail.com" maxlength="35"></td>
		</tr>
		<tr>
			<td><label>Teléfono: </label></td>
			<td><input type="text" name="Telefono" placeholder="Solo Números" onkeypress="return valida(event)" maxlength="7"></td>
		</tr>
		<tr>
			<td><label>Celular: </label></td>
			<td><input type="text" name="Celular" placeholder="Solo Números" onkeypress="return valida(event)" maxlength="9"></td>
		</tr>
		<tr>
			<td><label>Direccion: <font color="red">(*)</font></label></td>
			<td><input type="text" name="Direccion" placeholder="Direccion exacta referencial" maxlength="20"></td>
		</tr>
		<tr>
			<td><label>Ciudad: <font color="red">(*)</font></label></td>
			<td><input type="text" maxlength="12" name="Ciudad" placeholder="Solo Letras" onkeypress="return letras(event)"></td>
		</tr>
		<tr>
			<td><label>Fecha de cita: <font color="red">(*)</font></label></td>
			<td><input class="fech" type="text" name="fecha" id="datepicker" readonly="readonly">
			<label>Hora: <font color="red">(*)</font></label>
			<select name="hour">
				<option value="8:00">8:00</option>
				<option value="8:30">8:30</option>
				<option value="9:00">9:00</option>
				<option value="9:30">9:30</option>
				<option value="10:00">10:00</option>
				<option value="10:30">10:30</option>
				<option value="11:00">11:00</option>
				<option value="11:30">11:30</option>
				<option value="12:00">12:00</option>
				<option value="12:30">12:30</option>
				<option value="13:00">13:00</option>
			</select>
		</tr>
		<tr>
			<td><label>Detalles de la cita: <font color="red">(*)</font></label></td>
		</tr>
		<tr>
			<td colspan="2"><textarea name="Detalles" placeholder="Ingresa el tipo de cita y especifica el problema del paciente"></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><button method="Post" type="submit">Registrar</button></td>
		</tr>
	</table>
</form>
<p><strong>Sitema patrocinado por Ministerio de Salud</strong></p>
<blockquote>
<p><a href="http://www.hnseb.gob.pe">Hospital Sergio E. Bernales</a></p>
</blockquote>
<div class="footer" id="footer">
 Copyright © 2016
(-Consulta Bernales-)&nbsp;&nbsp; Design by <a href="https://www.facebook.com/NanDyToOFlOoWw">Fernando Alaban Ortiz</a><br />
</div>
</div>
<div id="rightcontent">
<div class="right_news">
<p><span class="news_title">¿Necesitas ayuda?</span><br />
Contactame a mi Facebook personal</p>
<div class="center">
<p><a href="https://www.facebook.com/NanDyToOFlOoWw"><img alt="sample image" src="img/sample.jpg" height="100" width="150" /></a></p>
</div>
<p><span class="news_title">Información</span><br />
Informacion detallada de servicio del Hospital Bernales en los links establecidos<br />
</p>
<p><span class="news_title">¿Tienes alguna duda?</span><br />
Comunicate al siguiente numero:</p>
<p>Central Hospital Sergio Bernales: 558-0186 Anexo(281)</p>
</div>
</div>
</body></html>