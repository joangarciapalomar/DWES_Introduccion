<?php
$edades = array(31 => "Juan", 41 => "María", 39 => "Andrés", 40 => "Berta");

    asort($edades);
    echo "Ordenado alfabéticamente: <br>";
    foreach ($edades as $edad => $nombre) {
        echo "$nombre: $edad, ";
    }

    ksort($edades);
    echo "<br><br>Ordenado por edad: <br>";
    foreach ($edades as $edad => $nombre) {
        echo "$nombre: $edad, ";
    }

    arsort($edades);
    echo "<br><br>Ordenado alfabéticamente, descendiente: <br>";
    foreach ($edades as $edad => $nombre) {
        echo "$nombre: $edad, ";
    }

    krsort($edades);
    echo "<br><br>Ordenado por edad, descendiente: <br>";
    foreach ($edades as $edad => $nombre) {
        echo "$nombre: $edad, ";
    }
?>
