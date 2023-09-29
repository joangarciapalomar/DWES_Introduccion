<?php require('conexion.php');

$id = $_GET['id'] ?? '';

$read = $pdo->query("SELECT * FROM Producto WHERE id = $id");


if ($id != ''){
    foreach ($read as $valor) {
        echo "ID: " . $valor['id'] . "<br>";
        echo "NOMBRE: " . $valor['nombre'] . "<br>";
        echo "PRECIO: " . $valor['precio'];
    }

}else{
    echo "Inserta un id válido";
}


$pdo = null;

?>