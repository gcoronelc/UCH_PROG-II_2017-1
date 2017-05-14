<?php

class Conexion{
	public $enlace;

	function __construct(){
		$this->enlace=mysqli_connect("mysql.hostinger.es","u879971861_us","14101001");
		mysqli_select_db($this->enlace, 'u879971861_regis');
	}
	function __destruct(){
		mysqli_close($this->enlace);
	}

}
?>