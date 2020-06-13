<?php 
    $usuario = 'root';
    $contrasena = '';
    $nombre = 'concesionaria';
    $servidor = 'mysql:host=localhost;dbname='.$nombre;

    try {
        $bd = new PDO(
            $servidor,
            $usuario,
            $contrasena
        );
    } catch (Exception $e) {
        echo "Problema con la conexion <br>";
        echo $e->getMessage();
    }
?>