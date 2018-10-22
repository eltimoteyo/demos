<?php 
require 'parametros.php';
function conectar(){
	$con= new mysqli(HOST,USER,PASS,BD);
	if($con->connect_errno) {
		print "ocurro un error :".$con->connect_error;
	}
	return $con;
	print "exito";
}
 ?>