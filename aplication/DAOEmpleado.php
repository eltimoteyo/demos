<?php 
/**
* 
*/
//include "conexion.php";
require "Empleado.php";
class DAOEmpleado{
	var $con;

	public function DAOEmpleado(){

	}
	public function insertar($objetoAlumno){
		$c=conectar();
		$nombre=$objetoAlumno->getNombre();
		$edad=$objetoAlumno->getEdad();
		$sql="INSERT INTO ALUMNO VALUES('','$nombre',$edad)";
		$resultado=mysqli_query($c,$sql);
		if (!$resultado) {
			print "Error al insertar";
		}else{
			print '<script languaje="JavaScript"> alert("Guardado!");</script>';

		}
		
          mysqli_close($c);
		  header('Location:index.php');
	}
public function eliminar($objetoAlumno){
		$c=conectar();
		$codalumno=$objetoAlumno->getCodalumno();
		$sql="DELETE FROM ALUMNO WHERE CODALUMNO=$codalumno";
		if (!$c->query($sql)) {
			print "Error al eliminar";
		}else{
			print '<script languaje="JavaScript"> alert("eliminado!");</script>';
		}
		mysqli_close($c);
		header('Location:index.php');
	}
	public function modificar($objetoAlumno){
		$c=conectar();
		$codalumno=$objetoAlumno->getCodalumno();
		$nombre=$objetoAlumno->getNombre();
		$edad=$objetoAlumno->getEdad();
		$sql="UPDATE ALUMNO SET NOMBRE='$nombre',EDAD=$edad WHERE CODALUMNO=$codalumno";
		if (!$c->query($sql)) {
			print '<script languaje="JavaScript"> alert("error al modificar!");</script>';
		}else{
			print
			 '<script languaje="JavaScript"> alert("modificar!");</script>';
			 header('Location index.php');
		}
		mysqli_close($c);
		header('Location:index.php');
	}
	public function listar(){
		$str = file_get_contents(__DIR__ . '/employees.json');

		$employees = json_decode($str, true);
		//var_dump($employees);exit();
		$emp=array();
		foreach ($employees as $i => $value) {
			$emp[$i]=new Empleado();
			$emp[$i]->setCodalumno($value["id"]);
			$emp[$i]->setNombre($value["name"]);
			$emp[$i]->setEmail($value["email"]);
			$emp[$i]->setPosition($value["position"]);
		}
		return $emp;
		// $c=conectar();
		// $alumno=array();
		// $sql="SELECT * FROM `alumno`";
		// $query=mysqli_query($c,$sql);
		// $i=0;
		// while ($fila=mysqli_fetch_row($query)) {
		// 	$alumno[$i]=new Empleado();
		// 	$alumno[$i]->setCodalumno($fila[0]);
		// 	$alumno[$i]->setNombre($fila[1]);
		// 	$alumno[$i]->setEdad($fila[2]);
		// 	$i++;
		// }
		// return $alumno;

	}
	public function listarporcodigo($codigo){
		//$c=conectar();
		$str = file_get_contents(__DIR__ . '/employees.json');
		$employees = json_decode($str, true);
		$emp=array();
		// $codalumno=strval($codigo)->getCodalumno();
		// $sql="SELECT * FROM `alumno` WHERE CODALUMNO=$codigo";
		// $query=$c->query($sql);
		$i=0;
		foreach ($employees as $key => $value) {
			$emp[$i]=new Empleado();
			$emp[$i]->setCodalumno($value["id"]);
			$emp[$i]->setNombre($value["name"]);
			$emp[$i]->setEmail($value["email"]);
			$emp[$i]->setPosition($value["position"]);
		}
		// while ($fila=mysqli_fetch_row($query)) {
		// 	$alumno[$i]=new Alumno();
		// 	$alumno[$i]->setCodalumno($fila[0]);
		// 	$alumno[$i]->setNombre($fila[1]);
		// 	$alumno[$i]->setEdad($fila[2]);
		// 	$i++;
		// }
		return $emp;
	}
}
 ?>