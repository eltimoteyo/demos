<?php

require 'conexion\conexion.php';


$cod = $_POST['codigo'];
$nom = $_POST['nombre'];
$desc = $_POST['descripcion'];
$precio = $_POST['precio'];
$foto = $_POST['foto'];


    if (empty($_FILES['uploadedfile'])) {


        $response["codigo"] = -1;
        $response["nombre"] = "vacio";
        die(json_encode($response));        
    } else {
        $file = $_FILES['uploadedfile'];
    }



     $target_path = "productos/imagenes/";
     $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
       
    } else{
        $response["codigo"] = -1;
        $response["nombre"] = "no sube";
        die(json_encode($response));
    }

    try{

        $connection = obtenerConexion();
        $dbh = $connection->prepare("INSERT INTO tb_producto values(?,?,?,?,?)");
        $dbh->bindParam(1,$cod);
        $dbh->bindParam(2,$nom);
        $dbh->bindParam(3,$desc);
        $dbh->bindParam(4,$precio);
        $dbh->bindParam(5,"imagenes/".$foto);
        $dbh->execute();
        $connection  = null;

        $response["codigo"] = 1;
        //$response["msg"] = "Exito";
        die (json_encode($response));

    }catch(PDOException $e)
    {

        $response["codigo"] = -1;
        $response["nombre"] = $e->getMessage();
        die (json_encode($response));
    }


//}

?>