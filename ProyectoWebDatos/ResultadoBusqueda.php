<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'Conexion.php';
        include 'menu.php';
    ?>

    <div class="container">
        <div class="row">
        <div class="col-12">
    <?php
        if($_GET["termino"] == ""){
    ?>
        <br>
        <div class="alert alert-danger">No existen registros con ese término de búsqueda</div><br><br>
        <a href="ConsultarDatos.php">Regresar</a>
    <?php } else { 
        $sql = "SELECT * from usuarios WHERE nombre LIKE '%" . $_GET["termino"] . "%'";
        $usuarios = $conexion->query($sql);
        if($usuarios->num_rows == 0) {
            echo "<br><div class='alert alert-danger'>No existen registros con ese término de búsqueda</div><br><br>";
        } else {
    ?>
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>correo</th>
                <th>telefono</th>
                <th>ubicacion</th>
            </thead>
            <tbody>
                <?php while($row = $usuarios->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["correo"]; ?></td>
                        <td><?php echo $row["telefono"]; ?></td>
                        <td><?php echo $row["ubicacion"]; ?></td>
                        <td>
                            <a href="ActualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                            <a href="EliminarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } } ?>
                </div></div></div>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>