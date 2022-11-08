<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pintureria El Zorro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>

    <?php 
    include 'Conexion.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM usuarios WHERE id=" . $id;
    $resultado = $conexion->query($sql);
    $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $registro["nombre"]; ?>" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Correo Electronico:</label>
                        <input value="<?php echo $registro["correo"]; ?>" type="text" class="form-control" name="correo" placeholder="Teclea el correo">
                    </div>

                    <div class="form-group">
                        <label for="">Telefono:</label>
                        <input value="<?php echo $registro["telefono"]; ?>" type="number" class="form-control" name="telefono" placeholder="Teclea el telefono">
                    </div>

                    <div class="form-group">
                        <label for="">Ubicacion:</label>
                        <input value="<?php echo $registro["ubicacion"]; ?>" type="text" class="form-control" name="ubicacion" placeholder="Teclea la ubicacion">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="ConsultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>