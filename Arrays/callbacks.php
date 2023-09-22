<?php 

    $array = ["Manolo", "Pablo", "Juan", "Luz", "Mercedes"];

    function len ($cadena){
        return strlen($cadena);
    }

    $array = array_map('len', $array);

    $max = max($array);
    $min = min($array);
        

    echo "La máxima cadena és: " . $max . " y la mínima: " . $min;

?>