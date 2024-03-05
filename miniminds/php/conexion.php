<?php

$servidorBD = "localhost";
$usuarioBD = "root";
$contrasenaBD = "";

$nombreBD = "miniminds";

$con = new mysqli($servidorBD, $usuarioBD, $contrasenaBD, $nombreBD);

mysqli_query($con, "SET NAMES 'utf8'");

mysqli_set_charset($con, "UTF8");


if(mysqli_connect_errno()){
        
    echo "no se pudo establecer conexion con la base de datos";
    
}

mysqli_select_db($con, $nombreBD) or die ("no se encontro la base de datos en el servidor");

?>