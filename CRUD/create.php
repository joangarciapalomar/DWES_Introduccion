<?php require('conexion.php'); 

    $nombre = $_GET['nombre'] ?? '';
    $precio = $_GET['precio'] ?? '';

    $insert = $pdo->prepare("INSERT INTO Producto (nombre, precio) VALUES ('$nombre', $precio)");

    if ($nombre != '' && $precio != ''){
        $insert->execute();
    }else{
        echo "Inserta un nombre y/o un número válido";
    }


    $pdo = null;
?>