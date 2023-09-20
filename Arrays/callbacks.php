<?php 

    $array = ["Manolo", "Pablo", "Juan", "Luz", "Mercedes"];

   function maxMin($array){

    print_r( $array);
    $max [] = array_map('max', $array);

    echo "La cadena de mayor tamaño de tu array es: " . $max;

    $min = array_map('min', $array);

    echo "La cadena de menor tamaño de tu array es: " . $min;


   }
        

   maxMin($array);

?>