<?php 

include 'Conexion.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$ubicacion = $_POST["ubicacion"];

$sql = "UPDATE usuarios SET nombre='".$nombre."', correo='".$correo."',".
"telefono='".$telefono."', ubicacion= '".$ubicacion."'".
"WHERE id=".$id;

if ($conexion->query($sql) === TRUE){
    echo "Registro guardado con exito <a href='ConsultarDatos.php'>Regresar</a>";
} else {
    echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='ConsultarDatos.php'>Regresar</a>";
}

$conexion->close();
?>