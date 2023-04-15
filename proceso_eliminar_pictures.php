<?php
    //include("conexion.php");

    $id = $_REQUEST['id'];
    $conexion =new PDO('mysql:host=localhost:3307;dbname=mypicture',"root","");
    //$query = "INSERT INTO imagen(nombre,imagenUp) VALUES('$nombre','$imagen')";

    $query = "DELETE FROM imagen WHERE id = '$id'";

    $resultado = $conexion->query($query);

    if($resultado){
        header("Location: mostrar.php");
    }
    else{
        echo "no se eliminó";
    }
      
?>