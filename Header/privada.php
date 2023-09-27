<?php 

$dejameEntrar = $_GET['login'] ?? "";

if ($dejameEntrar == 1){
    echo "<h1>Bienvenido</h1>";
}else if ($dejameEntrar == 0){
    header("Location: login.php");
    exit();
} else{
    http_response_code(404);

    echo "<h1>404<h1><hr/><h3>Entrada no válida</h3>";
}

?>