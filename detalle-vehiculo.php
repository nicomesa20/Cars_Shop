<?php 
    if (!isset($_GET["codigo"])) {
        # code...
    }
    $codigo = $_GET["codigo"];
    include 'model/conexion.php';

    $sentencia = $bd->prepare("select * from vehiculo where idVehiculo = ?");
    $sentencia->execute([$codigo]);
    $vehiculo = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Detalle de Auto</title>
    </head>
    <body>
        <!-- Inicio menu -->
        <?php include 'maqueta/menu.inc' ?>
        <!-- Fin menu  -->

        <!-- Contenido detalle -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/<?php echo $vehiculo->foto?>" alt="Foto Vehiculo" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h1><?php echo $vehiculo->nomVehiculo; ?></h1>
                    <p> $<?php echo $vehiculo->precio; ?></p>
                    <p><?php echo $vehiculo->detalle; ?></p>
                </div>
            </div>
        </div>
        <!-- Fin detalle -->
        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>