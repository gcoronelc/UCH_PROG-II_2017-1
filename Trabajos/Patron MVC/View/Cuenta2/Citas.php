<?php
require_once('php/Registro.php');
$Registro= new Registro(); 	
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
<title>Citas</title>
</head>
<body>
<div id="banner">
<div class="top_links clearfix" id="topnav">
<ul>
<li><a href="#">ID</a></li>
<li><a href="#">71163991</a></li>
<li><a href="#">Username</a></li>
<li><a href="#">Hugo Obispo Mego</a></li>
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
<p><H1 class="Titulos">Tabla de citas</H1></p>
<div>
		<?php
			$Registro->mostrar();
		?>
	</div>
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