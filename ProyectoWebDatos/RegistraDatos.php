<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h1>Registrar usuario</h1>
               <form method="post" action="GuardarDatos.php">
                   <div class="form-group">
                       <label for="">Nombre:</label>
                       <input type="text" class="form-control" name="nombre" placeholder="Escriba su nombre">
                   </div>

                   <div class="form-group">
                       <label for="">Correo electrónico:</label>
                       <input type="text" class="form-control" name="correo" placeholder="Escriba su correo">
                   </div>

                   <div class="form-group">
                       <label for="">Teléfono:</label>
                       <input type="number" class="form-control" name="telefono" placeholder="Escriba su telefono">
                   </div>

                   <div class="form-group">
                       <label for="">Ubicación:</label>
                       <input type="text" class="form-control" name="ubicacion" placeholder="Escriba su ubicacion">
                   </div>
                   <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
               </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Proyecto Pintureria
    </footer>
    <script src="js/bootstrap.js"></script>

    
</body>
</html>