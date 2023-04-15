<?php

    /*$conexion = new mysqli("localhost:127.0.0.1","root","","mypicture");
    $conexion = new mysqli('mysql:host=localhost:3307;dbname=mypicture',"root","");*/
    $conexion1 =new PDO('mysql:host=localhost:3307;dbname=mypicture',"root","");
    if($conexion1){
        echo "conexion exitosa";
    }
    else{
        echo "conexion no exitosa";
    }

?>