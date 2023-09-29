<?php
require('conexion.php'); 

$id = $_GET['id'] ?? '';
$nombre = $_GET['nombre'] ?? '';
$precio = $_GET['precio'] ?? '';

if ($id != '' && $nombre != '' && $precio != '') {
    $update = $pdo->prepare("UPDATE Producto SET nombre = :nombre, precio = :precio WHERE id = :id");
    $update->bindParam(':id', $id, PDO::PARAM_INT);
    $update->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $update->bindParam(':precio', $precio, PDO::PARAM_STR);
    
    if ($update->execute()) {
        echo "Registro actualizado con éxito.";
    } else {
        echo "Error al actualizar el registro: " . implode(", ", $update->errorInfo());
    }
} else {
    echo "Inserta un ID, nombre y/o precio válidos.";
}

$pdo = null;
?>
