<?php
//require_once 'conexion.php';
class Registro{
	public $NCitas;
	public $NombrePaciente;
	public $Email;
	public $Telefono;
	public $Celular;
	public $Direccion;
	public $Ciudad;
	public $Fecha;
	public $Hora;
	public $DetalleCita;
	//public $conexion = mysqli_connect("mysql.hostinger.es", "u879971861_us","14101001", "u879971861_regis") or die("Problemas con la conexion");

	function guardar($NombrePaciente, $Email, $Telefono, $Celular, $Direccion, $Ciudad, $Fecha, $Hora, $DetalleCita){

		$this->NombrePaciente = $NombrePaciente;
		$this->Email = $Email;
		$this->Telefono = $Telefono;
		$this->Celular = $Celular;
		$this->Direccion = $Direccion;
		$this->Ciudad = $Ciudad;
		$this->Fecha = $Fecha;
		$this->Hora = $Hora;
		$this->DetalleCita = $DetalleCita;
		$sql = "INSERT INTO Citas(NombrePaciente, Email, Telefono, Celular, Direccion, Ciudad, Fecha, Hora, DetalleCita) VALUES ('$this->NombrePaciente', '$this->Email', '$this->Telefono', '$this->Celular', '$this->Direccion', '$this->Ciudad', '$this->Fecha', '$this->Hora', '$this->DetalleCita')";
		$conexion = mysqli_connect("mysql.hostinger.es", "u879971861_us","14101001", "u879971861_regis") or die("Problemas con la conexion");
		mysqli_query($conexion, $sql) or die("Problemas al realizar registro");
		mysqli_close($conexion);
		echo "<script>
				alert('Registro exitoso');
				window.location.replace('Citas.php');
			</script>";
	}
	/*function guardar(){
		$sql="insert into Citas(NCitas, NombrePaciente, Email, Telefono, Celular, Direccion, Ciudad, Fecha, Hora)
		values('$this->NombrePaciente','$this->Email','$this->Telefono','$this->Celular','$this->Direccion','$this->Ciudad','$this->Fecha','$this->Hora','$this->DetalleCita')";
		$this->sql($sql);
		//mysqli_query(mysqli_connect("mysql.hostinger.es","u879971861_us","14101001"),$sql);	
	}*/
	public function mostrar(){
		$sql = "SELECT * FROM Citas";
		$conexion = mysqli_connect("mysql.hostinger.es", "u879971861_us","14101001", "u879971861_regis") or die("Problemas con la conexion");
		$citas = mysqli_query($conexion, $sql);
		$tablaCitas = "<table border=1 style='background: #34495E; color: #fff;  border-radius: .4em; overflow: hidden; border-color: red'>
						<thead>
							<th style='color:#dd5'>NºCita</th>
							<th style='color:#dd5'>Nombre de paciente</th>
							<th style='color:#dd5'>Email</th>
							<th style='color:#dd5'>Telefono</th>
							<th style='color:#dd5'>Celular</th>
							<th style='color:#dd5'>Direccion</th>
							<th style='color:#dd5'>Ciudad</th>
							<th style='color:#dd5'>Fecha</th>
							<th style='color:#dd5'>Hora</th>
							<th style='color:#dd5'>Detalle De la cita</th>
						</thead>";
		while($datos = mysqli_fetch_array($citas)){

			$tablaCitas .= "<tr style='border-top: 1px solid #ddd; border-bottom: 1px solid #ddd;'><td>".$datos['NCitas']."</td>
								<td>".$datos['NombrePaciente']."</td>
								<td>".$datos['Email']."</td>
								<td>".$datos['Telefono']."</td>
								<td>".$datos['Celular']."</td>
								<td>".$datos['Direccion']."</td>
								<td>".$datos['Ciudad']."</td>
								<td>".$datos['Fecha']."</td>
								<td>".$datos['Hora']."</td>
								<td>".$datos['DetalleCita']."</td>
								</tr>";
		}
		$tablaCitas .= "</table>";
		echo $tablaCitas;
		/*while ($fila=mysqli_fetch_assoc($rs)>0) {
			$est[]=$fila;
		}return $est;*/
	}
}