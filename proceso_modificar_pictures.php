<?php
    //include("conexion.php");

    $id = $_REQUEST['id'];
    $conexion =new PDO('mysql:host=localhost:3307;dbname=mypicture',"root","");
    $nombre = $_POST['nombre'];

    // Validar que se haya enviado un archivo antes de intentar leerlo
    if(isset($_FILES['imagen']['tmp_name']) && $_FILES['imagen']['tmp_name'] != '') {
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $query = "UPDATE imagen SET nombre='$nombre', imagenUp='$imagen' WHERE id = '$id'";
    } else {
        $query = "UPDATE imagen SET nombre='$nombre' WHERE id = '$id'";
    }

    $resultado = $conexion->query($query);

    if($resultado){
        header("Location: mostrar.php");
    }
    else{
        echo "no se modifico";
    }
?>

