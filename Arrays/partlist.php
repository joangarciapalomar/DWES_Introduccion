<?php 

    $array = ["Seguro", "que", "apruebo", "esta", "asignatura"];

    for ($i=1; $i < count($array) ; $i++) { 
        $salida = [implode( ", ", array_slice($array, 0, $i )), implode( " ", array_slice($array, $i , count($array)))];
        echo "<br>";
        print_r($salida);

    }

?>