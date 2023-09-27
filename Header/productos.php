<?php 

    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

    $id = $_GET['id'] ?? "";


    $existe = array_key_exists($id, $productos);

    if ($existe){
        print_r($productos[$id]);
    } else {
        http_response_code(404);

    echo "<h1>404<h1><hr/><h3>Producto no encontrado</h3>";
}

?>