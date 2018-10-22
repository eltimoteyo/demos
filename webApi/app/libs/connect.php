<?php

if(!defined("SPECIALCONSTANT")) die("Acceso Denegado");

function getConnection()
{

	try{

		$db_username = "root";
		$db_password = "root";
		$connection = new PDO("mysql:host=localhost;dbname=android", $db_username, $db_password);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	}catch(PDOException $e)
	{
		echo "Error: ". $e->getMessage();
	}

	return $connection;
}