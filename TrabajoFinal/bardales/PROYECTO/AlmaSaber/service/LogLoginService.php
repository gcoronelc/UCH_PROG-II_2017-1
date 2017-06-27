<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogLoginService
 *
 * @author KevinLogLoginService
 */
class LogLoginService {
    
    function __construct() {
        
    }

    function crear_log_Login($usuario,$fechayhora_inicio,$fechayhora_fin,$tiempodesession){
		$archivo = fopen("../log/log_".date("Y-m-d").".log", "a")or die ("Error al crear"); 

		// fwrite($archivo, "[Fecha: ".date("Y-m-d H:i:s.u")." - IP: ".$_SERVER['REMOTE_ADDR']." - Servidor: ".$_SERVER['SERVER_NAME']." - Informacion: ".$_SERVER['HTTP_USER_AGENT']." - $tipo : ".$cadena." - Usuario : ".$usuario." "."]\r\n");
		fwrite($archivo,"Usuario: ".$usuario." - Fecha y Hora Inicio: ".$fechayhora_inicio." - Fecha y Hora Fin: ".$fechayhora_fin." - Tiempo de session: ".$tiempodesession." minutos "."\r\n");
		fclose($archivo);
	}
}
