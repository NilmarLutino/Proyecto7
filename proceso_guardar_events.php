<?php
    //include("conexion.php");

    $conexion =new PDO('mysql:host=localhost:3307;dbname=mypicture',"root","");
    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO eventos(nombre,imagenEvent) VALUES('$nombre','$imagen')";

    $resultado = $conexion->query($query);

    if($resultado){
        header("Location: mostrar.php");
    }
    else{
        echo "no se insertó";
    }
      
?>