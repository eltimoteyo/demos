
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Empleados</title>
 	<link rel="stylesheet" href="estilos.css" type="text/css">
 	<script type="text/javascript">
        function cargar(codigo,nombre,email){
        	document.frmEmploye.txtcodigo.value=codigo;
        	document.frmEmploye.txtnombre.value=nombre;
        	document.frmEmploye.txtedad.value=email;
        }
 	</script>
 </head>
 <body>
 	<center>
 		<h2>FORMULARIO PARA LA TABLA EMPLEADOS</h2>
 		<form action="controlador.php" method="POST" name="frmEmploye">
 			<table>
 				<tr>
 					<td>codigo</td>
 					<td><input type="text" name="txtcodigo" id="txtcodigo"></td>
 				</tr>
 				<tr>
 					<td>nombre</td>
 					<td><input type="text" name="txtnombre" id="txtnombre"></td>
 				</tr>
 				<tr>
 					<td>edad</td>
 					<td><input type="text" name="txtedad" id="txtedad"></td>
 				</tr>
 				<tr>
 					<td colspan="2">
 						<input type="submit" value="Insertar" name="btnInsertar">
 						<input type="submit" value="Modificar" name="btnModificar">
 						<input type="submit" value="Eliminar" name="btnEliminar" >
 					</td>
 				</tr>

 			</table>
 		</form>
 		<table style='background-color:#eff3f8;'>
 			<?php 
require "controlador.php";

include_once("controlador.php");
$obj=new controlador();
$array=$obj->listar();
for ($i=0; $i < count($array) ; $i++) {
	echo ("<tr style='background-color:#eff3f8;'>");
	echo ("<td >".$array[$i]->getNombre()."</td>");
	echo ("<td >".$array[$i]->getEmail()."</td>");
	echo ("<td >".$array[$i]->getPosition()."</td>");
	$codigo=$array[$i]->getCodalumno();
    $nombre=$array[$i]->getNombre();
    $email=$array[$i]->getEmail();
	echo "<td><a href=\"javascript:cargar('$codigo','$nombre','$email')\">Editar</a></td>";
	echo ("</tr>");
}
 ?>
 		</table>

 	</center>
 </body>
 </html>