<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "pruebas";

$link = mysqli_connect($servername,$username,$password,$database);

    if (!$link) {
        die("Error al conectarse:". mysqli_connect_error());
    }else{
        echo "conectado";
    }



?>