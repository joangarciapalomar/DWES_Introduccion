<?php 
    $nombre = trim($_GET['nombre'] ?? 1, "/");
    
    $prefijo = ($_GET["prefijo"] ?? 1);

    $len = strlen ($nombre);
    
    $mayus = strtoupper($nombre);
    
    $minus = strtolower($nombre);

    $pos = strpos($nombre, $prefijo);

    $countA = substr_count($minus, "a") ;

    $posA = stripos($nombre, "a") + 1 ?? 1;

    $sustO = str_ireplace("o", "0", $nombre);
   
    echo "Tu nombre es: $nombre, 
    <br>Tu cadena mide $len caracteres
    <br>Tu nombre en mayúsculas es: $mayus 
    <br>Tu nombre en minúsculas es: $minus";
    
    if ($prefijo != 1){
        if ($pos === false) {

            echo "<br>El prefijo '$prefijo' no fue encontrado en su nombre '$nombre'";
        } else {

            echo "<br>El prefijo '$prefijo' fue encontrado en su nombre '$nombre'";
        }
    }else{

        echo "<br>Inserta un Prefijo para esta función";
    }

    echo "<br>Hay un total de $countA de caracteres 'a o A'";

    if ($posA === 1){
        echo "<br>No existe ninguna a";
    }else{
        echo "<br>La posición de la primera a és : $posA ";
    }

    echo "<br>Tu nombre cambiando las 'o' por ceros: $sustO";
?>