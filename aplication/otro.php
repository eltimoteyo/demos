<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>prueba</title>
</head>
<body>
	<h2>FORMULARIO PARA LA TABLA ALUMNO</h2>
 		<form action="controlador.php" method="POST">
 			<table>
 				<?php 
require "controlador.php";

include_once("controlador.php");
$obj=new controlador();
$cod=strval($_GET['codigo']);
echo gettype($cod);
$array=$obj->listarporcodigo($cod);
for ($i=0; $i < count($array) ; $i++) {
	echo ("<tr style='background-color:#eff3f8;'>");
	echo("<td>Codigo</td>");
	echo ("<td >".$array[$i]->getCodalumno()."</td>");
	echo ("</tr>");
	echo ("<tr style='background-color:#eff3f8;'>");
	echo("<td>Codigo</td>");
	echo ("<td >".$array[$i]->getNombre()."</td>");
	echo ("</tr>");
	echo ("<tr style='background-color:#eff3f8;'>");
	echo("<td>Codigo</td>");
	echo ("<td >".$array[$i]->getEdad()."</td>");
	echo ("</tr>");
}
 ?>

 			</table>
 		</form>
	
</body>
</html>