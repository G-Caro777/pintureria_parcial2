<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "Pintureria_El_Zorro";

    $conexion = new mysqli($server, $user, $password, $database);

    if($conexion->connect_error){
        die("Falló la conexión: " . $conexion->connect_error);
    }

?>
