<?php

function obtenerConexion()
{

	try{

		$db_username = "root";
		$db_password = "";
		$connection = new PDO("mysql:host=localhost;dbname=bd_android", $db_username, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	}catch(PDOException $e)
	{
		echo "Error: ". $e->getMessage();
	}

	return $connection;
}

?>