<?php 
require "DAOEmpleado.php";
$dao=new DAOEmpleado();

class controlador{

 		function listar(){
 			$daoalum=new DAOEmpleado();
 			$array=$daoalum->listar();
 			return $array;
 		    }
 		    function listarporcodigo($codigo){
 			$daoalum=new DAOAlumno();
 			$cod=strval($_GET['codigo']);
 			$array=$daoalum->listarporcodigo($cod);
 			return $array;
 		    }
	
}
function cargar(){
 			$alumno=new Empleado();
 			$alumno->setNombre($_REQUEST["txtnombre"]);
 			$alumno->setEdad($_REQUEST["txtedad"]);
 			return $alumno;
 			
 		}
 function Modificar(){
 			$alumno=new Empleado();
 			$alumno->setCodalumno($_REQUEST["txtcodigo"]);
 			$alumno->setNombre($_REQUEST["txtnombre"]);
 			$alumno->setEdad($_REQUEST["txtedad"]);
 			return $alumno;

 		}
 		if (isset($_REQUEST["btnInsertar"])) {
 			$dao->insertar(cargar());
 		}
 		if (isset($_REQUEST["btnModificar"])) {
 			$dao->modificar(modificar());

 		}
 		if (isset($_REQUEST["btnEliminar"])) {
 			$dao->eliminar(modificar());

 		}
 		
?>
