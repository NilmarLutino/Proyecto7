<?php
    //include("conexion.php");

    $id = $_REQUEST['id'];
                                                $conexion =new PDO('mysql:host=localhost:3307;dbname=mypicture',"root","");
                                                $query = "SELECT * FROM eventos WHERE id = '$id'";
                                                $resultado = $conexion->query($query);
                                                $row = $resultado->fetch(PDO::FETCH_ASSOC);
                                                $nombre = $row['nombre'];
                                                $imagen = $row['imagenEvent'];

                                                //$query1 = "INSERT INTO carrito(nombre,imagen) VALUES('$nombre','$imagen')";

                                                $query1 = "INSERT INTO carrito(nombre,imagen) VALUES('".addslashes($nombre)."','".addslashes($imagen)."')";

                                                $resultado = $conexion->query($query1);
    if($resultado){
        header("Location: pedidos.php");
    }
    else{
        echo "no se modifico";
    }
?>

