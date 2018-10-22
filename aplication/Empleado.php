<?php 
/**
* 
*/
class Empleado{
	var $codalumno;
	var $nombre;
	var $edad;
	var $email;
	var $position;
	public function Empleado(){

	}
	public function getCodalumno(){
		return $this->codalumno;
	}
	public function setCodalumno($codalumno){
		$this->codalumno=$codalumno;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getEdad(){
		return $this->edad;
	}
	public function setEdad($edad){
		$this->edad=$edad;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email=$email;
	}
	public function getPosition(){
		return $this->position;
	}
	public function setPosition($position){
		$this->position=$position;
	}

	function Empleados($nombre,$edad,$codalumno){
        $this->codalumno=$codalumno;
		$this->nombre=$nombre;
		$this->edad=$edad;

	}
}
 ?>