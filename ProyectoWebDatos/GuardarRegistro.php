<?php 

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$ubicacion = $_POST["ubicacion"];

$sql = "UPDATE usuarios SET nombre='".$nombre."', correo=".$correo.",".
"telefono=".$telefono.", ubicacion= '".$ubicacion."'".
"WHERE id=".$id;

if ($conexion->query($sql) === TRUE){
    echo "Registro guardado con exito <a href=''>Regresar</a>";
} else {
    echo "ERROR: ".$sql."<br>".$conexion->error."<br><br><a href=''>Regresar</a>";
}

$conexion->close();
?>