<?php
require('conexion.php');


$id = $_GET['id'] ?? '';

$delete = $pdo->prepare("DELETE FROM Producto WHERE id = $id");

if ($id != '') {
    $delete->execute();
} else {
    echo "Inserta un ID válido.";
}

$pdo = null;
?>
