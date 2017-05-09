<?php

class Conexion{
	public $enlace;

	/*function __construct(){
		$this->enlace=mysqli_connect("mysql.hostinger.es","u879971861_us","14101001", "u879971861_regis");
		return $this->enlace;
		//mysqli_select_db($this->enlace, 'u879971861_regis');
	}*/
	public function __construct(){

		$this->connect_DB();
	}

	private function connect_DB(){

		$conexion = mysqli_connect("mysql.hostinger.es", "u879971861_us","14101001", "u879971861_regis");
		return $conexion;
	}

	public function sql($sql){

		$query = mysqli_query($this->connect_DB(),$sql) or die(mysqli_error());
		return $query;
	}

	public function __destruct(){

		mysqli_close($this->connect_DB());
		//$close = mysqli_close($this->connect_DB());
		//return $close;
	}
	/*function __destruct(){
		mysqli_close($this->enlace);
	}*/

}
?>