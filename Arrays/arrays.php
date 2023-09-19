<?php 
    $nombres = ["Joan", "Dylan", "Matilde", "Pedro", "Alejandro"];
    $nombres_original = ["Joan", "Dylan", "Matilde", "Pedro", "Alejandro"];
      
    echo "El array tiene " . count($nombres) . " elementos.<br>";
    echo "<br>Cadena de nombres: " . implode(" ", $nombres);

    asort($nombres);

    echo "<br><br>Cadena ordenada alfabéticamente: "; 
    print_r($nombres);

    $arrayReverso = array_reverse($nombres_original);

    echo "<br><br>Este es el orden inverso a su creación: ";
    print_r($arrayReverso);

    echo "<br><br>La posición de mi nombre es la: " . array_search("Joan", $nombres_original);


    $alumnos = [
        [0, "Joan", 19], 
        [1, "Dylan", 19], 
        [2, "Matilde", 34], 
        [3, "Pedro", 45], 
        [4, "Alejandro", 16]
    ];

    echo "<br><br>TABLA ALUMNOS<br>";

 ?>

<table border="1" style="border-collapse: collapse;">
    <?php 

    foreach ($alumnos as $alumno) {
        echo "<tr>"; 
        echo "<td>&nbsp;" . $alumno[0] . "</td>
            <td>&nbsp;" . $alumno[1] . "</td>
            <td>&nbsp;" . $alumno[2] . "</td>";
        echo "</tr>"; 
    }
    
    ?>
</table>
<br><br>

<?php 
    $nombresAlumnos = array_column($alumnos, 1);
    print_r($nombresAlumnos);


    $numeros = [5, 8, 2, 9, 10, 14, 75, 23, 1, 6];

    $suma = array_sum($numeros);

    echo "<br><br>El resultado es: ";
    print_r($suma)
?>