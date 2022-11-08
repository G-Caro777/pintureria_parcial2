<?php 

    include 'Conexion.php';


    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $ubicacion = $_POST["ubicacion"];

    $sql = "INSERT INTO usuarios (nombre, correo, telefono, ubicacion)".
    "VALUES ('".$nombre."', '".$correo."', ".$telefono.", '".$ubicacion."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='ConsultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='ConsultarDatos.php'>Regresar</a>";
    }

    $conexion->close();


?>
