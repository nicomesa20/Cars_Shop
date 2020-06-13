<?php 
    include 'model/conexion.php';
    $sentencia = $bd->query('select * from vehiculo');
    $vehiculo = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
        <title>Tienda de Vehiculos</title>
    </head>
    <body>
        <!-- Inicio Menu -->
        <?php include 'maqueta/menu.html' ?>

        <!-- Inicio Vehiculos -->
        <div class="container">
            <div class="row">
                <?php 
                foreach ($vehiculo as $dato) {    
                ?>
                <div class="col-md-4 text-center mt-4">
                    <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idVehiculo?>"><img src="img/<?php echo $dato->foto?>" alt="imagen auto" class="img-fluid"></a>
                    <h2><?php echo $dato->nomVehiculo ?></h2>
                    <p> <?php echo $dato->precio ?></p>
                    <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idVehiculo?>" class="btn btn-primary">Ver Detalles</a>
                </div>
                <?php 
                }
                ?>
            </div>
        </div>

        <!-- Fin Vehiculos -->

        <!-- Fin Menu -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>